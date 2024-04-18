<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('welcome_message');
        echo "hello user";
	}

    public function login()
	{
		$this->load->view('login_view');
        
	}
}
