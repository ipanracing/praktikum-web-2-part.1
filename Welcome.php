<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class Welcome extends CI_controller {

	public function about()
	{
		$this->load->view('about');
	}

	public function profile()
	{
		$this->load->view('profile');
	}

	public function index()
	{
		$this->load->view('profile');
	}
}