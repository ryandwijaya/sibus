<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jalurController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Jalur');
        $this->load->model('Jadwal');
        $this->load->model('Tujuan');
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

        $data['jalur'] = $this->Jalur->getJalur();
        $data['jadwal'] = $this->Jadwal->getJadwal();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'jalur';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/jalur/index',$data);
        $this->load->view('templates/footer');
		
	}
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'jalur_jadwal' => $this->input->post('jalur_jadwal'),  
            'jalur_tujuan' => $this->input->post('jalur_tujuan')
        );
        
        if (count($_POST)>0) {
            $this->Jalur->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('jalur'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('jalur'));
        }


        }  
    }

    public function edit($id)
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'jalur_lokasi' => $this->input->post('jalur_lokasi'),  
            'jalur_jarak' => $this->input->post('jalur_jarak')
        );
        
        if (count($_POST)>0) {
            $this->Jalur->edit($id,$data);
            $this->session->set_flashdata('alert', 'success_change');
            redirect(site_url('jalur'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('jalur'));
        }
        }else{
            $data['jalur'] = $this->Jalur->getJalurById($id);
            // var_dump($data['jalur']);
            // exit();
            $data['judul'] = 'Edit Data jalur';
            $this->load->view('templates/header',$data);
            $this->load->view('backend/jalur/edit',$data);
            $this->load->view('templates/footer');  
        } 
    }

    public function delete($id){
        $this->Jalur->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('jalur'));

    }
    
	
}
