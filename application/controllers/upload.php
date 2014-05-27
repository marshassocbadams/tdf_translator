<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function index()
	{
		//CHECK TO SEE IF FORM HAS BEEN SUBMITTED. IF IT HAS, SHOW WHAT WAS SENT. 
		if ($this->input->post('submit'))
		{
			echo "You submitted the form.";
		}
		
		//PULL SOMETHING FROM ANOTHER FUNCTION
		$message = $this->say_hello();
		
		//WE CAN ECHO SOMETHING HERE, EVEN THOUGH THAT'S BAD MVC FORM
		echo $message;
		
		
		$this->load->view('upload/form');
	}
	
	function say_hello()
	{
		return "Justin loves Jim Morrison's Poetry.";
	}
	
}