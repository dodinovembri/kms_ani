<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExplicitKnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ExplicitKnowledgeModel', 'KnowledgeCategoryModel', 'UserModel', 'NotificationModel', 'ActivityModel', 'ExplicitCommentModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        if ($this->session->userdata('role_id') == 0) {
            $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 1) {
            $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 2) {
            $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getWithJoin()->result();
        }elseif ($this->session->userdata('role_id') == 3) {
            $data['explicit_knowledges'] = $this->ExplicitKnowledgeModel->getWithJoinByWhere(4)->result();    
        }
        $this->load->view('templates/header');
		$this->load->view('explicit_knowledge/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $knowledge_category_id = $this->input->post('knowledge_category_id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $is_visible_to_visitor = $this->input->post('is_visible_to_visitor');
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
                'knowledge_category_id' => $knowledge_category_id,
                'title' => $title,
                'content' => $description,
                'is_visible_to_visitor' => $is_visible_to_visitor,
                'status' => 2,
                'file' => $this->upload->data('file_name'),
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }
        else
        {                          
            $data = array(
                'knowledge_category_id' => $knowledge_category_id,
                'title' => $title,
                'contet' => $description,
                'is_visible_to_visitor' => $is_visible_to_visitor,
                'status' => 2,
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }

        $this->ExplicitKnowledgeModel->insert($data);
        $last_id = $this->db->insert_id();

        $user_id = $this->session->userdata('id');
        $users = $this->UserModel->getWithoutMe($user_id)->result();

        foreach ($users as $key => $value) {
            $notif = array(
                'user_id' => $value->id,
                'knowledge_id' => $last_id,
                'title' => $title,
                'content' => $description,
                'is_tacit' => 0,
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

        $this->session->set_flashdata('success', "Success create Explicit Knowledge!");
        return redirect(base_url('explicit_knowledge'));
    }

    public function show($id)
    {
        $data['explicit_knowledge'] = $this->ExplicitKnowledgeModel->getById($id)->row();
        $data['explicit_comments'] = $this->ExplicitCommentModel->getByWhere($id)->result();

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function show_from_notif($id)
    {
        $data = array(
            'is_read' => 1
        );
        $this->NotificationModel->update($data, $id);
        
        $data['explicit_knowledge'] = $this->ExplicitKnowledgeModel->getById($id)->row();;

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }    

    public function edit($id)
    {
        $data['explicit_knowledge'] = $this->ExplicitKnowledgeModel->getById($id)->row();
        $data['knowledge_categories'] = $this->KnowledgeCategoryModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('explicit_knowledge/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $knowledge_category_id = $this->input->post('knowledge_category_id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
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
                'knowledge_category_id' => $knowledge_category_id,
                'title' => $title,
                'description' => $description,
                'file' => $this->upload->data('file_name'),
                'creator_id' => $creator_id,
                'created_at' => $created_at
            );
        }
        else
        {                          
            $data = array(
                'knowledge_category_id' => $knowledge_category_id,
                'title' => $title,
                'description' => $description,
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

    public function store_comment($id)
    {
        $comment = $this->input->post('comment');
        $user_id = $this->session->userdata('id');

        $data = array(
            'explicit_knowledge_id' => $id,
            'content' => $comment,
            'creator_id' => $user_id,
            'created_at' => date("Y-m-d H-i-s")
        );

        $this->ExplicitCommentModel->insert($data);        
        return redirect(base_url("explicit_knowledge/show/$id"));
    }    
}
