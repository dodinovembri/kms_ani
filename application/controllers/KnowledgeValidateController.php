<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KnowledgeValidateController extends CI_Controller {

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
        $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getWhere(0)->result();
        $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getWhere(0)->result();

        $this->load->view('templates/header');
		$this->load->view('knowledge_validate/index', $data);
        $this->load->view('templates/footer');
	}

    public function show($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('knowledge_validate/show', $data);
        $this->load->view('templates/footer');
    }    

    public function accept_by_admin($id)
    {
        $data = array(
            'status' => 1,
            'updater_id' => $this->session->userdata('id'),
            'updated_at' => date("Y-m-d H-i-s")
        );

        $this->TacitKnowledgeModel->update($data, $id);
        $this->session->set_flashdata('success', "Success accept Tacit Knowledge!");
        return redirect(base_url('knowledge_validate'));
    }

    public function reject_by_admin($id)
    {
        $data = array(
            'status' => 2,
            'updater_id' => $this->session->userdata('id'),
            'updated_at' => date("Y-m-d H-i-s")
        );

        $this->TacitKnowledgeModel->update($data, $id);
        $this->session->set_flashdata('warning', "This Knowledge has been rejected!");
        return redirect(base_url('knowledge_validate'));
    }    
}
