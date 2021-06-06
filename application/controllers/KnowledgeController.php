<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel', 'ExplicitKnowledgeModel', 'HelperModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        if ($this->session->userdata('role_id') == 0) {
            $data['knowledges'] = $this->HelperModel->getWithUnionAll()->result();
        }elseif ($this->session->userdata('role_id') == 1) {
            $data['knowledges'] = $this->HelperModel->getWithUnionKasiAll()->result();
        }elseif ($this->session->userdata('role_id') == 2) {
            $data['knowledges'] = $this->HelperModel->getWithUnionAll()->result();
        }elseif ($this->session->userdata('role_id') == 3) {
            $data['knowledges'] = $this->HelperModel->getWithUnionVisitor()->result();
        }

        $this->load->view('templates/header');
		$this->load->view('knowledge/index', $data);
        $this->load->view('templates/footer');
	}
}
