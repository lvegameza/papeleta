<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('PapeletaModel');
	}

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/nav');
		$this->load->view('user/papeletas/index');
		$this->load->view('user/footer');
	}

	public function papeleta()
	{
		$this->load->view('user/header');
		$this->load->view('user/nav');
		$data['data'] = $this->PapeletaModel->All_papeleta();
		$this->load->view('user/papeletas/create',$data);
		$this->load->view('user/footer');
	}
	public function create()
	{
		
	}

	public function store()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}

}
