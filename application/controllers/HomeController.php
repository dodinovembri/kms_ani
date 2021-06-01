<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['KnowledgeCategoryModel']);
    }

	public function index()
	{
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
	}

    public function knowledge($id)
    {
        $data['knowledges'] = $this->KnowledgeCategoryModel->getByWhere($id)->result();
        
        $this->load->view('templates/header');
        $this->load->view('home/knowledge', $data);
        $this->load->view('templates/footer');        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }
}