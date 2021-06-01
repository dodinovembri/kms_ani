<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('about/index');
        $this->load->view('templates/footer');
	}
}
