<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TacitKnowledgeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/index');
        $this->load->view('templates/footer');
	}

    public function create()
    {
        // 
    }

    public function store()
    {
        // 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // 
    }

    public function update($id)
    {
        // 
    }

    public function destroy($id)
    {
        // 
    }  
}