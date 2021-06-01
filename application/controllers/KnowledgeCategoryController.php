<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KnowledgeCategoryController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['KnowledgeCategoryModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('knowledge_category/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('knowledge_category/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $category_code = $this->input->post('category_code');
        $category_icon = $this->input->post('category_icon');
        $category_background = $this->input->post('category_background');
        $category_title = $this->input->post('category_title');
        $category_description = $this->input->post('category_description');        
        $status = $this->input->post('status');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'category_code' => $category_code,
            'category_icon' => $category_icon,
            'category_background' => $category_background,
            'category_title' => $category_title,
            'category_description' => $category_description,
            'status' => $status,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->KnowledgeCategoryModel->insert($data);
        $this->session->set_flashdata('success', "Success create knowledge category!");
        return redirect(base_url('knowledge_category'));
    }

    public function show($id)
    {
        $data['knowledge_category'] = $this->KnowledgeCategoryModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('knowledge_category/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['knowledge_category'] = $this->KnowledgeCategoryModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('knowledge_category/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $category_icon = $this->input->post('category_icon');
        $category_background = $this->input->post('category_background');
        $category_title = $this->input->post('category_title');
        $category_description = $this->input->post('category_description');        
        $status = $this->input->post('status');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'category_icon' => $category_icon,
            'category_background' => $category_background,
            'category_title' => $category_title,
            'category_description' => $category_description,
            'status' => $status,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->KnowledgeCategoryModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update knowledge category!");
        return redirect(base_url('knowledge_category'));        
    }

    public function destroy($id)
    {
        $this->KnowledgeCategoryModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('knowledge_category'));
    }
}
