<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
  
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function login()
    {
        $this->load->view("login/login");
    }
    public function signin()
    {
        $this->load->view("sign-in/signin");
    }

}
