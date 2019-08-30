<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Jadwal');
        $this->load->model('Bus');
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

        $data['jadwal'] = $this->Jadwal->getJadwal();
        // echo '<pre>';
        // var_dump($data['jadwal']);
        // exit();
        $data['bus'] = $this->Bus->getBus();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'jadwal';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/jadwal/index',$data);
        $this->load->view('templates/footer');
		
	}
    public function print()
    {
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }

        $data['jadwal'] = $this->Jadwal->getJadwal();
        // echo '<pre>';
        // var_dump($data['jadwal']);
        // exit();
        $data['bus'] = $this->Bus->getBus();
        $data['tujuan'] = $this->Tujuan->getTujuan();
        $data['judul'] = 'Laporan Jadwal';
        $this->load->view('templates/header',$data);
        $this->load->view('backend/jadwal/print',$data);
        $this->load->view('templates/footer');
        
    }
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'jadwal_bus' => $this->input->post('jadwal_bus'),
            'jadwal_tgl_berangkat' => $this->input->post('jadwal_tgl_berangkat'),
            'jadwal_jam_berangkat' => $this->input->post('jadwal_jam_berangkat'),
            'jadwal_markup' => $this->input->post('jadwal_markup'),
        );
        
        if (count($_POST)>0) {
            $this->Jadwal->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('jadwal'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('jadwal'));
        }


        }  
    }

    public function edit($id)
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'jadwal_bus' => $this->input->post('jadwal_bus'),
            'jadwal_tgl_berangkat' => $this->input->post('jadwal_tgl_berangkat'),
            'jadwal_jam_berangkat' => $this->input->post('jadwal_jam_berangkat'),
            'jadwal_markup' => $this->input->post('jadwal_markup'), 
        );
        
        if (count($_POST)>0) {
            $this->Jadwal->edit($id,$data);
            $this->session->set_flashdata('alert', 'success_change');
            redirect(site_url('jadwal'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('jadwal'));
        }
        }else{
            $data['jadwal'] = $this->Jadwal->getJadwalById($id);
            // var_dump($data['jadwal']);
            // exit();
            $data['judul'] = 'Edit Data Jadwal';
            $this->load->view('templates/header',$data);
            $this->load->view('backend/jadwal/edit',$data);
            $this->load->view('templates/footer');  
        } 
    }

    public function delete($id){
        $this->Jadwal->delete_jalur($id);
        $this->Jadwal->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('jadwal'));

    }
    
	
}
