<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDekstop extends CI_Controller {
	public function index()
	{
        $this->load->view('dekstop/header');
        $this->load->view('dekstop/bpjs');
		$this->load->view('dekstop/layanan');
		$this->load->view('dekstop/about');
		$this->load->view('dekstop/background');
        $this->load->view('dekstop/footer');
	}
}