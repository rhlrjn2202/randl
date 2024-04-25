
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Blog extends BaseController {

	public function __construct()
	{
         parent::__construct();
        $this->load->model('user_model');
		$this->isLoggedIn();  
		$this->load->model('Blog_model','blog');
	}

	public function blogview()
	{
		$this->load->helper('url');
       $this->global['pageTitle'] = 'CodeInsect : Blog';
		$this->loadViews('AddBlog', $this->global, NULL , NULL);
   
	}


}
