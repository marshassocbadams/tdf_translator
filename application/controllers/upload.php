<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function index()
	{		
		$this->load->view('upload/form');
	}
	
	function do_upload()
	{
		//SETUP THE CONFIG SPECS FOR THE UPLOAD LIBRARY
		$config['upload_path'] 		= './temp/';
		$config['allowed_types'] 	= 'txt';
		$config['max_size']			= '1000';
		$config['overwrite'] 		= TRUE;
		$config['file_name'] 		= 'test.txt';

		//LOAD THE UPLOAD LIBRARY WITH OUR SPECS
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file_upload'))
		{
			$error = array('error' => $this->upload->display_errors());
			
			echo "<pre>"; 
			print_r($this->upload->display_errors());
			echo "</pre>";
			
			
			$this->load->view('upload/form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload/form', $data);
		}
	}
	
	
}