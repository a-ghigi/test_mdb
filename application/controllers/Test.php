<?php

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	
	public function index()
	{
		$this->load->view('test/header');
		$this->load->view('test/main');
		$this->load->view('test/footer');
	}
}
