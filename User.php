<?php
defined('BASEPATH') OR exist('No direct script access allowed');

class User extends CI_controller {
    public function__construct()
    {
        parent::__construct();
        $this->load->model("User_Model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Data User',
            'user' => $this->User_Model->getAll(),
            'content' => 'user/index'
        );
        $this->load->view('template/main',$data);
    }
}