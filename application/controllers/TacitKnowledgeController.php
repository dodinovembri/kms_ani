<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TacitKnowledgeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['TacitKnowledgeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['tacit_knowledges'] = $this->TacitKnowledgeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('tacit_knowledge/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $tacit_knowledge_code = $this->input->post('tacit_knowledge_code');
        $tacit_knowledge_name = $this->input->post('tacit_knowledge_name');
        $address = $this->input->post('address');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $email = $this->input->post('email');
        $voice_number = $this->input->post('voice_number');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/tacit_knowledge/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'tacit_knowledge_code' => $tacit_knowledge_code,
                'tacit_knowledge_name' => $tacit_knowledge_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'image' => $this->upload->data('file_name'),
                'status' => $status
            );

            $insert = $this->TacitKnowledgeModel->insert($data);
            $this->session->set_flashdata('success', "Success create tacit_knowledge!");
            return redirect(base_url('tacit_knowledge'));
        }
        else
        {                          
            $data = array(
                'tacit_knowledge_code' => $tacit_knowledge_code,
                'tacit_knowledge_name' => $tacit_knowledge_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'status' => $status
            );

            $insert = $this->TacitKnowledgeModel->insert($data);
            $this->session->set_flashdata('success', "Success create tacit_knowledge!");
            return redirect(base_url('tacit_knowledge'));
        }
    }

    public function show($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->get_data($id)->row();
        $data['tacit_knowledge_facility'] = $this->tacit_knowledgeFacilityModel->get_tacit_knowledge_facility($id)->result();
        $data['tacit_knowledge_extracurricular'] = $this->tacit_knowledgeExtracurricularModel->get_data_by_alt($id)->result();
        $data['tacit_knowledge_location'] = $this->tacit_knowledgeLocationModel->get_data_by_alt($id)->result();
        $data['tacit_knowledge_accessibility'] = $this->tacit_knowledgeAccessibilityModel->get_data_by_alt($id)->result();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['tacit_knowledge'] = $this->TacitKnowledgeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('tacit_knowledge/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $tacit_knowledge_code = $this->input->post('tacit_knowledge_code');
        $tacit_knowledge_name = $this->input->post('tacit_knowledge_name');
        $address = $this->input->post('address');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $email = $this->input->post('email');
        $voice_number = $this->input->post('voice_number');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/tacit_knowledge/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'tacit_knowledge_code' => $tacit_knowledge_code,
                'tacit_knowledge_name' => $tacit_knowledge_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'image' => $this->upload->data('file_name'),
                'status' => $status
            );

            $update = $this->TacitKnowledgeModel->update($data, $id);
            $this->session->set_flashdata('success', "Success update tacit_knowledge!");
            return redirect(base_url('tacit_knowledge'));
        }
        else
        {                          
            $data = array(
                'tacit_knowledge_code' => $tacit_knowledge_code,
                'tacit_knowledge_name' => $tacit_knowledge_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'status' => $status
            );

            $update = $this->TacitKnowledgeModel->update($data, $id);
            $this->session->set_flashdata('success', "Success update tacit_knowledge!");
            return redirect(base_url('tacit_knowledge'));
        }
    }

    public function destroy($id)
    {
        $delete = $this->TacitKnowledgeModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('tacit_knowledge'));
    }
}
