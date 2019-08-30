<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class AjaxController extends GLOBAL_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('PendaftarModel');
		}
		
		/*
		 * handling berkas
		 * insert,update,delete, upload
		 * */
		
		public function ajaxGeneratePath()
		{
			$generate  = substr(time(),5);
			
			$pathData = array(
				'form' => parent::post('form'),
				'file_name' => 'berkas-'.$generate,
				'path'  => site_url('assets/docs/berkas/')
			);
			
			echo json_encode($pathData);
		}
		
		public function ajaxUploadFiles($form)
		{
			if ($form !== ''){
				$generate  = substr(time(),5);
				
				$config['upload_path'] = './assets/docs/berkas/';
				$config['file_name'] = $this->uri->segment(4);
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '3063';
				$config['max_width'] = '1084';
				$config['max_height'] = '1086';
				
				$this->upload->initialize($config);
				if (!$this->upload->do_upload($form)){
					$error = array('error' => $this->upload->display_errors());
					echo json_encode($error);
				}else{
					echo json_encode('success');
				}
			}
			
		}
		
		public function ajaxSaveDocument()
		{
			if (parent::post('dokumen') !== ''){
				$dokumenData = array(
					'dokumen_data' => parent::post('dokumen'),
					'status_dokumen' => 'belum',
					'pendaftar_id' => parent::post('pendaftar')
				);
				
				$insertStatus = parent::model('PendaftarModel')->insert_dokumen_pendaftar($dokumenData);
				
				if ($insertStatus > 0){
					echo json_encode('success');
				}else{
					echo json_encode('fail');
				}
			}else{
				show_404();
			}
		}
		
	}