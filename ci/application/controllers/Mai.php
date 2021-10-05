<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mai extends CI_Controller {
	
	public function index()
	{
		$this->load->view('mai_view');
		$this->load->view('css-me');
		$this->load->view('sm1');
	}
}
