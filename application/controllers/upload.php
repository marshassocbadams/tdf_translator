<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function index()
	{
		//CHECK TO SEE IF FORM HAS BEEN SUBMITTED. IF IT HAS, SHOW WHAT WAS SENT. 
		if ($this->input->post('submit'))
		{
			echo "You submitted the form.";
		}
		
		$this->load->view('upload/form');
	}
}