<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->view('header');
        $this->load->view('bpjs');
		$this->load->view('layanan');
		$this->load->view('about');
		$this->load->view('success');
		$this->load->view('background');
        $this->load->view('footer');
	}
}
