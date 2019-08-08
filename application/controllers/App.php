<?php


class App extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		$this->load->helper('url');
		$this->load->view('common/header');
		$this->load->view('services/index');
		$this->load->view('common/footer');
	}
}
