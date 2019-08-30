<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Pemesanan');
        $this->load->model('Bus');
        $this->load->model('Tujuan');
        $this->load->model('Jadwal');
        $this->load->model('Konfirmasi');
        date_default_timezone_set('Asia/Jakarta');
        // }
        // if (!$this->session->has_userdata('session_nip')){
        //     redirect(site_url('login'));
        // }
        
	}
	public function index()
	{
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
        $data['pemesanan'] = $this->Pemesanan->getPemesanan();
        
        // echo '<pre>';
        // var_dump($data['jjj']);
        // exit();
        $data['jadwal'] = $this->Jadwal->getJadwal();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'pemesanan';
		    $this->load->view('templates/header',$data);
        $this->load->view('backend/pemesanan/index',$data);
        $this->load->view('templates/footer');
		
	}
  public function cetak()
  {
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
        $data['pemesanan'] = $this->Pemesanan->getPemesanan();
        
        // echo '<pre>';
        // var_dump($data['jjj']);
        // exit();
        $data['jadwal'] = $this->Jadwal->getJadwal();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'pemesanan';
        $this->load->view('templates/header',$data);
        $this->load->view('backend/pemesanan/cetak',$data);
        $this->load->view('templates/footer');
    
  }
  public function ajaxGetJadwal($id){
        $data = $this->Jadwal->getJadwalByTujuan($id);
        echo json_encode($data);
  }
  public function ajaxCekKursi($id,$kursi){
        $data = $this->Bus->cekKursiById($id,$kursi);
        echo json_encode($data);
  }
  public function print()
  {
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
        $data['konfirmasi'] = $this->Konfirmasi->getKonfirmasi();
        $data['judul'] = 'Laporan Pemesanan Tiket';
        $this->load->view('templates/header',$data);
        $this->load->view('backend/pemesanan/print',$data);
        $this->load->view('templates/footer');
    
  }

  public function konfirmasi($id)
  {

        $data['tiket'] = $this->Pemesanan->getPemesananByNo($id);
        $data['tiket_kode']=$id;
        $data['judul'] = 'pemesanan';
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/konfirmasi/pembayaran',$data);
        $this->load->view('frontend/template/footer');
    
  }
  public function ajaxGetHarga($tujuan,$dari){
        $data = $this->Tujuan->getMarkByTujuan($tujuan,$dari);
        echo json_encode($data);
  }

   public function pembayaran()
    {
        if (isset($_POST['submit'])) {


          $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'jpg|png|jpeg';
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          

           

        if (!$this->upload->do_upload('konfirmasi_bukti')) {
              $error = array('error' => $this->upload->display_errors());
              var_dump($error);
        }else{
              $foto = $this->upload->data('file_name');

              $data = array(
            'konfirmasi_no_pemesanan' => $this->input->post('konfirmasi_no_pemesanan'),  
            'konfirmasi_pengirim' => $this->input->post('konfirmasi_pengirim'),  
            'konfirmasi_no_rek' => $this->input->post('konfirmasi_no_rek'),  
            'konfirmasi_tgl_bayar' => $this->input->post('konfirmasi_tgl_bayar'),  
            'konfirmasi_rekening' => $this->input->post('konfirmasi_rekening'),  
            'konfirmasi_bukti' => $foto
              );

            if (count($_POST)>0) {
                $this->Pemesanan->post_konfirmasi($data);
                $this->session->set_flashdata('alert', 'success_bayar');
                redirect(site_url('konfirmasi'));
            }else{
                $this->session->set_flashdata('alert', 'fail_post');
                redirect(site_url('konfirmasi'));
            }

        }


        


        }  
    }
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {

            $kode_pemesanan = 'HDY-'.rand(1,20).''.rand(10,9999);
            $jadwal_id = $this->input->post('jadwal_id');

            $getJadwal = $this->Jadwal->getJadwalById($jadwal_id);


           $data_pemesanan = array(
            'pemesanan_no' => $kode_pemesanan,
            'pemesanan_jadwal' => $this->input->post('jadwal_id'),
            'pemesanan_jml_seat' => $this->input->post('pemesanan_seat'),
            'pemesanan_total_bayar' => ($this->input->post('pemesanan_seat')*$getJadwal['tujuan_harga'])
            );

           $this->Pemesanan->post($data_pemesanan);

           $getPemesanan = $this->Pemesanan->getPemesananByKode($kode_pemesanan);
           $data_detail = [
               'detail_nama' => $this->input->post('detail_nama'),  
               'detail_nope' => $this->input->post('detail_nope'),  
               'detail_email' => $this->input->post('detail_email'),  
               'detail_pemesanan' => $getPemesanan['pemesanan_id']  
           ];

           $data['kode_pemesanan'] = $kode_pemesanan;
           $this->Pemesanan->post_detail($data_detail);
           $this->session->set_flashdata('alert', 'success_post');
           $this->load->view('frontend/template/header',$data);
           $this->load->view('frontend/pemesanan/sukses',$data);
           $this->load->view('frontend/template/footer');
        }  
    }

    public function delete($id){
        $this->Pemesanan->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('pemesanan'));

    }
    public function batal($id){
        $this->Pemesanan->batal($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('konfirmasi'));

    }
    
	
}
