<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal');
        $this->load->model('Bus');
        $this->load->model('Pemesanan');
    }

    public function index()
    {
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
        $data['judul'] = 'Dashboard';
        $data['jadwal'] = $this->Jadwal->getJadwal();
        $data['bus'] = $this->Bus->getBus();
        $data['pemesanan'] = $this->Pemesanan->getPemesanan();
        $this->load->view('templates/header',$data);
        $this->load->view('dashboard/index',$data);
        $this->load->view('templates/footer');
    }
    
}
