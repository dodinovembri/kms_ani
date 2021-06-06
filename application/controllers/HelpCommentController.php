<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpCommentController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['HelpCommentModel']);
    }

	public function index()
	{
        // 
	}

    public function show($id)
    {
        // 
    }

    public function store($id)
    {
        $help_id = $id;
        $comment = $this->input->post('comment');  
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'help_id' => $help_id,
            'content' => $comment,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->HelpCommentModel->insert($data);
        $this->session->set_flashdata('success', "Success request for help!");
        return redirect(base_url("help/show/$help_id"));
    }
}