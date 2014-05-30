<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Translate extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('file');
    }
	
	function index()
	{		
		$string = read_file('./temp/test.txt');
		
		$file_array = preg_split('/\r\n|\n|\r/', trim($string));
		$line_array = array();

		foreach($file_array as $line)
		{
			$line_array[] = explode("\t", $line);
		}

		foreach($line_array as $lines)
		{
			echo "<strong>".trim($lines[1])."</strong> = ".trim($lines[0])."<br>";
		}
	}
	
	function user_data()
	{
		echo "<h3>This is the user data we have.</h3>";
		$user_data = $this->user_model->list_all();
		echo "<pre>"; print_r($user_data); echo "</pre>";
	}	
}