<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TacitKnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getNotWhere(2)->result();

        $this->load->view('templates/header');
		$this->load->view('tacit_knowledge/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $status = $this->input->post('status');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'category' => $category,
            'title' => $title,
            'content' => $content,
            'status' => $status,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->TacitKnowledgeModel->insert($data);
        $this->session->set_flashdata('success', "Success create tacit_knowledge!");
        return redirect(base_url('tacit_knowledge'));
    }

    public function show($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $status = $this->input->post('status');
        $updater_id = $this->session->userdata('id');
        $updated_at = date("Y-m-d H-i-s");

        $data = array(
            'category' => $category,
            'title' => $title,
            'content' => $content,
            'status' => $status,
            'updater_id' => $updater_id,
            'updated_at' => $updated_at
        );

        $this->TacitKnowledgeModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update Tacit Knowledge!");
        return redirect(base_url('tacit_knowledge'));        
    }

    public function destroy($id)
    {
        $delete = $this->TacitKnowledgeModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('tacit_knowledge'));
    }
}
