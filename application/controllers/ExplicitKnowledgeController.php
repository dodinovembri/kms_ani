<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExplicitKnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ExplicitKnowledgeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('explicit_knowledge/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $status = $this->input->post('status');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        // for file
        $file = uniqid();
        $config['upload_path']          = './uploads/explicit_knowledge/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx';            
        $config['file_name']            = $file;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('file'))
        {
            $data = array(
                'category' => $category,
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'file' => $this->upload->data('file_name'),
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }
        else
        {                          
            $data = array(
                'category' => $category,
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }

        $this->ExplicitKnowledgeModel->insert($data);
        $this->session->set_flashdata('success', "Success create Explicit Knowledge!");
        return redirect(base_url('explicit_knowledge'));
    }

    public function show($id)
    {
        $data['explicit_knowledge'] = $this->ExplicitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['explicit_knowledge'] = $this->ExplicitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $status = $this->input->post('status');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        // for file
        $file = uniqid();
        $config['upload_path']          = './uploads/explicit_knowledge/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx';            
        $config['file_name']            = $file;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('file'))
        {
            $data = array(
                'category' => $category,
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'file' => $this->upload->data('file_name'),
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }
        else
        {                          
            $data = array(
                'category' => $category,
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }
        $this->ExplicitKnowledgeModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update Explicit Knowledge!");
        return redirect(base_url('explicit_knowledge'));        
    }

    public function destroy($id)
    {
        $delete = $this->ExplicitKnowledgeModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('explicit_knowledge'));
    }
}
