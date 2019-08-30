<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Bus');
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
        $data['bus'] = $this->Bus->getBus();
        $data['judul'] = 'Bus';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/bus/index',$data);
        $this->load->view('templates/footer');
		
	}
    
   

    public function create()
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'bus_kode' => $this->input->post('bus_kode'),  
            'bus_kelas' => $this->input->post('bus_kelas'),  
            'bus_seat' => $this->input->post('bus_seat')  
        );
        
        if (count($_POST)>0) {
            $this->Bus->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('bus'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('bus'));
        }


        }  
    }

    public function edit($id)
    {
        if (isset($_POST['submit'])) {
           $data = array(
            'bus_kode' => $this->input->post('bus_kode'),
            'bus_kelas' => $this->input->post('bus_kelas'),
            'bus_seat' => $this->input->post('bus_seat')
        );
        
        if (count($_POST)>0) {
            $this->Bus->edit($id,$data);
            $this->session->set_flashdata('alert', 'success_change');
            redirect(site_url('bus'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('bus'));
        }
        }else{
            $data['bus'] = $this->Bus->getBusById($id);
            // var_dump($data['bus']);
            // exit();
            $data['judul'] = 'Edit Data Bus';
            $this->load->view('templates/header',$data);
            $this->load->view('backend/bus/edit',$data);
            $this->load->view('templates/footer');  
        } 
    }

    public function delete($id){
        $this->Bus->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('bus'));

    }
    
	
}
