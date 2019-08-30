<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller
	{
		public function __construct()
	{
		parent::__construct();
        $this->load->model('Bus');
        $this->load->model('Tujuan');
        $this->load->model('Jadwal');
        $this->load->model('Pemesanan');
        $this->load->model('Konfirmasi');
        date_default_timezone_set('Asia/Jakarta');
        // }
        // if (!$this->session->has_userdata('session_nip')){
        //     redirect(site_url('login'));
        // }
        
	}
	public function index()
	{

		$data['jadwal'] = $this->Jadwal->getJadwal();
        // echo '<pre>';
        // var_dump($data['jadwal']);
        // exit();
        $data['bus'] = $this->Bus->getBus();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        
		$this->load->view('frontend/template/header',$data);
		$this->load->view('frontend/dashboard/index',$data);
		$this->load->view('frontend/template/footer',$data);
		
	}

	public function buy()
	{
		$id=$_GET['id_jadwal'];

		$data['jadwal'] = $this->Jadwal->getJadwalById($id);
		$data['jalur'] = $this->Jadwal->getTujuan($id);
		$data['tujuan_dari'] = $this->Jadwal->getDari($id);


		// echo '<pre>';
		// var_dump($data['jalur']);
		// exit();
        $data['bus'] = $this->Bus->getBus();
        $data['tujuan'] = $this->Tujuan->getTujuan();
		$this->load->view('frontend/template/header',$data);
		$this->load->view('frontend/pemesanan/denah',$data);
		$this->load->view('frontend/template/footer',$data);
		
	}
	public function buy_admin()
	{
		$id=$_GET['id_jadwal'];

		$data['jadwal'] = $this->Jadwal->getJadwalById($id);
		$data['jalur'] = $this->Jadwal->getJalurByJadwal($id);
		// echo '<pre>';
		// var_dump($data['jalur']);
		// exit();
        $data['bus'] = $this->Bus->getBus();
		$this->load->view('frontend/template/header',$data);
		$this->load->view('frontend/pemesanan/denah_admin',$data);
		$this->load->view('frontend/template/footer',$data);
		
	}
	public function beli()
	{
		if (isset($_POST['submit'])) {
			$kode_pemesanan = 'HDY-'.rand(1,9).''.rand(1,20).''.rand(10,9999);
           $data = array(
            'tiket_kode' => $kode_pemesanan,  
            'tiket_jadwal' => $this->input->post('tiket_jadwal'),  
            'tiket_nama' => $this->input->post('tiket_nama'),  
            'tiket_nope' => $this->input->post('tiket_nope') , 
            'tiket_no_kursi' => $this->input->post('tiket_no_kursi'),  
            'tiket_tujuan' => $this->input->post('tiket_tujuan'),  
            'tiket_total_bayar' => $this->input->post('tiket_total_bayar')  
        	);
        
        if (count($_POST)>0) {
            $this->Pemesanan->postTiket($data);
            $data['kode_pemesanan'] = $kode_pemesanan;
            $this->session->set_flashdata('alert', 'success_post');
           	$this->load->view('frontend/template/header',$data);
           	$this->load->view('frontend/pemesanan/sukses',$data);
           	$this->load->view('frontend/template/footer');
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('bus'));
        }


        }
		
	}
	public function beli_admin()
	{
		if (isset($_POST['submit'])) {
			$kode_pemesanan = 'HDY-'.rand(1,9).''.rand(1,20).''.rand(10,9999);
           $data = array(
            'tiket_kode' => $kode_pemesanan,  
            'tiket_jadwal' => $this->input->post('tiket_jadwal'),  
            'tiket_nama' => $this->input->post('tiket_nama'),  
            'tiket_nope' => $this->input->post('tiket_nope') , 
            'tiket_no_kursi' => $this->input->post('tiket_no_kursi'),  
            'tiket_tujuan' => $this->input->post('tiket_tujuan'),  
            'tiket_total_bayar' => $this->input->post('tiket_total_bayar')  
        	);

           
        
        if (count($_POST)>0) {
            $this->Pemesanan->postTiket($data);
            $tiket= $this->Pemesanan->getTiketByKode($kode_pemesanan);
            $data_konfirmasi  = [
               'konfirmasi_no_pemesanan' => $tiket['tiket_id'],
               'konfirmasi_pengirim' => $this->input->post('tiket_nama'),
               'konfirmasi_status' => 'valid',
               'konfirmasi_rekening' => 'BNI',
               'konfirmasi_no_rek' => 'admin',
               'konfirmasi_tgl_bayar' => date("Y/m/d"),
           	];
           	$this->Pemesanan->post_konfirmasi($data_konfirmasi);
            $this->session->set_flashdata('alert', 'success_post');
           	redirect(site_url('pemesanan'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('pemesanan'));
        }


        }
		
	}
	public function konfirmasi()
	{	if (isset($_POST['submit'])) {
		$kode = $this->input->post('pemesanan_kode');
		$data['pemesanan'] = $this->Pemesanan->getPemesananByNo($kode);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/konfirmasi/index',$data);
		$this->load->view('frontend/template/footer');
		}elseif(isset($_POST['konfirmasi'])){

		}else{
		$kode = NULL;
		$data['pemesanan'] = $this->Pemesanan->getPemesananByNo($kode);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/konfirmasi/index',$data);
		$this->load->view('frontend/template/footer');
		}
		
		
	}
}

?>