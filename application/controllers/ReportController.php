<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel', 'ExplicitKnowledgeModel', 'KnowledgeCategoryModel', 'UserModel', 'NotificationModel', 'TacitCommentModel', 'ActivityModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getReport()->result();
        $data['tacit_category_knowledges'] = $this->TacitKnowledgeModel->getReportByCategory()->result();
        $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getReport()->result();
        $data['explicit_category_knowledges'] = $this->ExplicitKnowledgeModel->getReportByCategory()->result();

        $this->load->view('templates/header');
		$this->load->view('report/index', $data);
        $this->load->view('templates/footer');
	}
}
