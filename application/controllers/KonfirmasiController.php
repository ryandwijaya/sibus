<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonfirmasiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Konfirmasi');
        $this->load->model('Pemesanan');
        date_default_timezone_set('Asia/Jakarta');
        
        
        
	}
	public function index()
	{

        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }

        $data['konfirmasi'] = $this->Konfirmasi->getKonfirmasi();
        $data['judul'] = 'Konfirmasi';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/konfirmasi/index',$data);
        $this->load->view('templates/footer');
		
	}

    public function printTiket($id)
    {

        $data['tiket'] = $this->Pemesanan->getPemesananById($id);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/pemesanan/tiket',$data);
        $this->load->view('frontend/template/footer',$data);
        
    }
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'konfirmasi_lokasi' => $this->input->post('konfirmasi_lokasi'),  
            'konfirmasi_harga' => $this->input->post('konfirmasi_harga')
        );
        
        if (count($_POST)>0) {
            $this->Konfirmasi->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('konfirmasi'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('konfirmasi'));
        }


        }  
    }

    public function do($id)
    {
        
           $data = array(
            'konfirmasi_status' => 'valid'
        );
        
        $do = $this->Konfirmasi->edit($id,$data);
        if ($do>0) {
            $this->session->set_flashdata('alert', 'success_change');
            redirect(site_url('admin/konfirmasi'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('admin/konfirmasi'));
        }
        
    }

    public function delete($id){
        $this->Konfirmasi->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('admin/konfirmasi'));

    }
    
    
	
}
