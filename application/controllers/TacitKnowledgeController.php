<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TacitKnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel', 'KnowledgeCategoryModel', 'UserModel', 'NotificationModel', 'TacitCommentModel', 'ActivityModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        if ($this->session->userdata('role_id') == 0) {
            $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 1) {
            $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 2) {
            $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 3) {
            $data['tacit_knowledges'] = $this->TacitKnowledgeModel->getWhere()->result();    
        }

        $this->load->view('templates/header');
		$this->load->view('tacit_knowledge/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $knowledge_category_id = $this->input->post('knowledge_category_id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $is_visible_to_visitor = $this->input->post('is_visible_to_visitor');
        $creator_id = $this->session->userdata('id');
        $created_at = date("Y-m-d H-i-s");

        $data = array(
            'knowledge_category_id' => $knowledge_category_id,
            'title' => $title,
            'content' => $content,
            'is_visible_to_visitor' => $is_visible_to_visitor,
            'status' => 2,
            'creator_id' => $creator_id,
            'created_at' => $created_at
        );

        $this->TacitKnowledgeModel->insert($data);
        $last_id = $this->db->insert_id();

        $user_id = $this->session->userdata('id');
        $users = $this->UserModel->getWithoutMe($user_id)->result();

        foreach ($users as $key => $value) {
            $notif = array(
                'user_id' => $value->id,
                'knowledge_id' => $last_id,
                'title' => $title,
                'content' => $content,
                'is_tacit' => 1,
                'is_read' => 0,
                'created_at' => $created_at
            );
            $this->NotificationModel->insert($notif);
        }

        $activity = array(
            'message' => $this->session->userdata('name')." Create ".$title,
            'created_at' => $created_at
        );
        $this->ActivityModel->insert($activity);

        $this->session->set_flashdata('success', "Success create tacit knowledge!");
        return redirect(base_url('tacit_knowledge'));
    }

    public function show($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();
        $data['tacit_comments'] = $this->TacitCommentModel->getByWhere($id)->result();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function show_from_notif($id)
    {
        $data = array(
            'is_read' => 1
        );
        $this->NotificationModel->update($data, $id);

        $temp = $this->NotificationModel->getById($id)->row();

        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($temp->knowledge_id)->row();
        $data['tacit_comments'] = $this->TacitCommentModel->getByWhere($temp->knowledge_id)->result();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $knowledge_category_id = $this->input->post('knowledge_category_id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $is_visible_to_visitor = $this->input->post('is_visible_to_visitor');
        $updater_id = $this->session->userdata('id');
        $updated_at = date("Y-m-d H-i-s");

        $data = array(
            'knowledge_category_id' => $knowledge_category_id,
            'title' => $title,
            'content' => $content,
            'is_visible_to_visitor' => $is_visible_to_visitor,
            'status' => 1,
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

    public function store_comment($id)
    {
        $comment = $this->input->post('comment');
        $user_id = $this->session->userdata('id');

        $data = array(
            'tacit_knowledge_id' => $id,
            'content' => $comment,
            'creator_id' => $user_id,
            'created_at' => date("Y-m-d H-i-s")
        );

        $this->TacitCommentModel->insert($data);        
        return redirect(base_url("tacit_knowledge/show/$id"));
    }
}
