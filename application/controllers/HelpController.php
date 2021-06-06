<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['HelpModel', 'HelpCommentModel']);
    }

	public function index()
	{
        $data['helps'] = $this->HelpModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('help/index', $data);
        $this->load->view('templates/footer');
	}

    public function show($id)
    {
        $data['help'] = $this->HelpModel->getById($id)->row();
        $data['help_comments'] = $this->HelpCommentModel->getByWhere($id)->result();

        $this->load->view('templates/header');
        $this->load->view('help/show', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $title = $this->input->post('title');
        $help_message = $this->input->post('help_message');  
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'title' => $title,
            'content' => $help_message,
            'status' => 1,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->HelpModel->insert($data);
        $this->session->set_flashdata('success', "Success request for help!");
        return redirect(base_url('help'));
    }
}