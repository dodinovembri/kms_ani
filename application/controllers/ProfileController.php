<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $user_id = $this->session->userdata('id');
        $data['profile'] = $this->UserModel->getById($user_id)->row();

        $this->load->view('templates/header');
		$this->load->view('profile/edit', $data);
        $this->load->view('templates/footer');
	}

    public function update($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $position = $this->input->post('position');
        $image = $this->input->post('image');
        $birth_place = $this->input->post('birth_place');
        $religion = $this->input->post('religion');
        $sex = $this->input->post('sex');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/user/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'name' => $name,
                'email' => $email,
                'position' => $position,
                'image' => $this->upload->data('file_name'),
                'birth_place' => $birth_place,
                'religion' => $religion,
                'sex' => $sex,
                'address' => $address,
                'phone_number' => $phone_number,
            );
        }
        else
        {                          
            $data = array(
                'name' => $name,
                'email' => $email,
                'position' => $position,
                'birth_place' => $birth_place,
                'religion' => $religion,
                'sex' => $sex,
                'address' => $address,
                'phone_number' => $phone_number,
            );
        }

        $this->UserModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update profile!");
        return redirect(base_url('profile'));
    }

    public function change_password()
    {
        $this->load->view('templates/header');
		$this->load->view('profile/change_password');
        $this->load->view('templates/footer');
    }

    public function update_password()
    {
        $id = $this->session->userdata('id');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password entered is doesn't match");
            return redirect(base_url('profile/change_password'));
        }else{
            $password = md5($password);    
            $data = array(
                'password' => $password
            );

        $this->UserModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update password!");
        return redirect(base_url('profile/change_password'));
        }
    }
}
