<?php
class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Blog_model');
    }

    public function index()
    {
    	$this->load->view('home.html');
    }

    public function newBlog(){
        $this->load->view('editBlog');

    }
}