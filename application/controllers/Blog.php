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
    	//加载默认首页
        echo '首页';
    }

    public function newBlog(){
        $this->load->view('editBlog');

    }
}