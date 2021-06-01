<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel', 'ExplicitKnowledgeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['knowledges'] = $this->TacitKnowledgeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('knowledge/index', $data);
        $this->load->view('templates/footer');
	}
}
