<?php


class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('M_services');
	}

	public function loadRecord($rowno=0)
	{
		$rowperpage = 5;
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
	}

		$allcount = $this->M_services->getrecordCount();

		$users_record = $this->M_services->getData($rowno,$rowperpage);

		$config['base_url'] = base_url().'index.php/User/loadRecord';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
	}
}
