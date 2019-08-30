<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('User');
        $this->load->model('ExtendModel');
        $this->load->model('Cuti');
        date_default_timezone_set('Asia/Jakarta');
        // }
        // if (!$this->session->has_userdata('session_nip')){
        //     redirect(site_url('login'));
        // }
        
	}
	public function index()
	{

		$data['user'] = $this->User->getUser();
        $data['judul'] = 'User';
		$this->load->view('templates/header',$data);
        $this->load->view('backend/user/index',$data);
        $this->load->view('templates/footer');
		
	}
    
    
    public function create()
    {
        if (isset($_POST['submit'])) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|png|jpeg|PNG';
            $nama_file = $_FILES['userfile2']['name'];
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
           $data = array(
            'user_username' => $this->input->post('user_username') ,
            'user_nama' => $this->input->post('user_nama') ,
            'user_level' => $this->input->post('user_level') ,
            'user_password' => md5($this->input->post('user_password')) ,
            'user_foto' => str_replace(' ','_',$nama_file)
            );
        
        if (count($_POST)>0) {
            $this->upload->do_upload('userfile2');
            $this->User->post($data);
            $this->session->set_flashdata('alert', 'success_post');
            redirect(site_url('user'));
        }else{
            $this->session->set_flashdata('alert', 'fail_post');
            redirect(site_url('user'));
        }


        }  
    }

    public function delete($id){
        $this->User->delete($id);
        $this->session->set_flashdata('alert', 'success_delete');
        redirect(site_url('user'));

    }
    
	
}
