<?php
class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
    	//登录
        $this->load->view('login.html');

    }
}