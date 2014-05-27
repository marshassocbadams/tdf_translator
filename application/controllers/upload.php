<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function index()
	{
		//CHECK TO SEE IF FORM HAS BEEN SUBMITTED. IF IT HAS, SHOW WHAT WAS SENT. 
		if ($this->input->post('submit'))
		{
			echo "You submitted the form.";
		}
		
		//SET UP A VARIABLE CALLED DATA TO HOLD THE INFORMATION THAT WE'RE GOING TO PASS TO THE VIEW
		$data = array();
		
		//INSERT OUR MESSAGE INTO THE DATA ARRAY
		$data['message'] = $this->say_hello();
		
		//LOAD THE VIEW ('UPLOAD/FORM') WITH THE DATA ARRAY ($DATA) INJECTED
		$this->load->view('upload/form', array('data' => $data));
	}
	
	function say_hello()
	{
		return "Justin loves Jim Morrison's Poetry.";
	}
	
}