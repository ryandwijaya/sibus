<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TujuanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Tujuan');
        $this->load->model('Pemesanan');
        date_default_timezone_set('Asia/Jakarta');
        // }
        // if (!$this->session->has_userdata('session_nip')){
        //     redirect(site_url('login'));
        // }
        
	}
	public function index()
	{

        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'tujuan';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/tujuan/index',$data);
        $this->load->view('templates/footer');
		
	}
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'tujuan_lokasi' => $this->input->post('tujuan_lokasi'),  
            'tujuan_dari' => $this->input->post('tujuan_dari'),  
            'tujuan_harga' => $this->input->post('tujuan_harga')
        );
        
        if (count($_POST)>0) {
            $this->Tujuan->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('tujuan'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('tujuan'));
        }


        }  
    }

    public function edit($id)
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'tujuan_lokasi' => $this->input->post('tujuan_lokasi'),  
            'tujuan_harga' => $this->input->post('tujuan_harga')
        );
        
        if (count($_POST)>0) {
            $this->Tujuan->edit($id,$data);
            $this->session->set_flashdata('alert', 'success_change');
            redirect(site_url('tujuan'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('tujuan'));
        }
        }else{
            $data['tujuan'] = $this->Tujuan->getTujuanById($id);
            // var_dump($data['tujuan']);
            // exit();
            $data['judul'] = 'Edit Data Tujuan';
            $this->load->view('templates/header',$data);
            $this->load->view('backend/tujuan/edit',$data);
            $this->load->view('templates/footer');  
        } 
    }

    public function delete($id){
        $this->Tujuan->deleteJalur($id);
        $this->Tujuan->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('tujuan'));

    }
    
	
}
