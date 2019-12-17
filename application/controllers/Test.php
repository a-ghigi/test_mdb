<?php

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('test/index');
		$this->load->view('templates/footer');
	}
}
