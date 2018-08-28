<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/nav');
		$this->load->view('user/papeletas/index');
		$this->load->view('user/footer');
	}
}
