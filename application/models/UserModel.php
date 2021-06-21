<?php

class UserModel extends CI_Model
{
    private $_table = "users";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }      

    public function getByWhere()
    {
        $this->db->where('role_id', 3);
        return $this->db->get($this->_table);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    } 
    public function check_auth($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get($this->_table);
    }    
    
    public function getWithoutMe($user_id)
    {
        $this->db->where('id !=', $user_id);        
        return $this->db->get($this->_table);
    }

    public function getWithoutMeAndExlude($user_id)
    {
        $this->db->where('id !=', $user_id);        
        $this->db->where('role_id !=', 3);        
        return $this->db->get($this->_table);
    }    
}