<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'ChatModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['users'] = $this->UserModel->get()->result();
        
        $this->load->view('templates/header');
        $this->load->view('chat/index', $data);
        $this->load->view('templates/footer');
	}

    public function chat_with($id)
    {
        $receiver_id = array('receiver_id' => $id);
        $this->session->set_userdata($receiver_id);
        
        $sender_id = $this->session->userdata('id');
        $receiver_id = $this->session->userdata('receiver_id');

        $data['users'] = $this->UserModel->get()->result();
        $data['chats'] = $this->ChatModel->getWithJoin($sender_id, $receiver_id)->result();
        $this->load->view('templates/header');
        $this->load->view('chat/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // 
    }

    public function store()
    {
        $receiver_id = $this->session->userdata('receiver_id');
        $sender_id = $this->session->userdata('id');
        $message = $this->input->post('message');
        $data = array(
            'send_to_id' => $receiver_id,
            'send_by_id' => $sender_id,
            'message' => $message, 
            'created_at' => date("Y-m-d H-i-s")
        );

        $this->ChatModel->insert($data);
        return redirect(base_url("chat/chat_with/$receiver_id"));
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
