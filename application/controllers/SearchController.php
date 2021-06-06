<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel', 'HelperModel']);
    }

    public function index()
    {
        $data = $this->HelperModel->getWithUnionAll()->result();
        $word = $this->input->post('word');

        $tacit = [];
        foreach ($data as $key => $value) {
            $values = SearchString($value->content, $word);
            if ($values) {
                $tacit_id = $value->id;
                array_push($tacit, $tacit_id);
            }            
        }

        if (count($tacit) > 0) {            
            $data['knowledges'] = $this->TacitKnowledgeModel->getByIdAll($tacit)->result();
        }
        else{
            $data['knowledges'] = $this->TacitKnowledgeModel->getAny()->result();
        }


        $this->load->view('templates/header');
		$this->load->view('search/index', $data);
        $this->load->view('templates/footer');
    }
}