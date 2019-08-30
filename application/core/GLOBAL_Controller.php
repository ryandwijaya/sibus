<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GLOBAL_Controller extends CI_Controller {
	public $userID;
	public $userLevel;
	public $userName;
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('sess_id')) {
			$this->userID = $this->session->userdata('sess_id');
			$this->userName = $this->session->userdata('sess_user');
			$this->userLevel = $this->session->userdata('sess_level');
		}
	}
	
	/*
	 * helper lives here
	 * include templating helper, debugging & error helper, core helper
	 * */
	
	// system helper
	public function model($model)
	{
		return $this->$model;
	}
	public function post($value)
	{
		return $this->input->post($value);
	}
	public function get($value)
	{
		return $this->input->get($value);
	}
	public function cek_array($arr)
	{
		echo "<pre>";
		print_r($arr);
		exit;
	}
	public function cek_type($var)
	{
		echo "<pre>";
		var_dump($var);
		exit;
	}
	public function hasLogin()
	{
		return $this->session->has_userdata('sess_user') ? true : false;
	}
	
	//	templating helper
	public function template($content,$data)
	{
		$this->load->view('templates/header', $data);
		$this->load->view($content, $data);
		$this->load->view('templates/footer', $data);
	}
	public function authPage($content,$data)
	{
		$this->load->view($content,$data);
	}
	public function alert($name,$value)
	{
		$this->session->set_flashdata($name,$value);
	}
	
}
