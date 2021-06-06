<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['HelpModel']);
    }

	public function index()
	{
        $data['helps'] = $this->HelpModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('help/index', $data);
        $this->load->view('templates/footer');
	}
}