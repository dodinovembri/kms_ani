<?php

class HelpCommentModel extends CI_Model
{
    private $_table = "help_comment";

    public function get()
    {
        $this->db->where('status', 1);
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

    public function getByWhere($id)
    {
        return $this->db->query("select help_comment.*, users.name as name, users.image as image from help_comment JOIN users ON help_comment.creator_id = users.id where help_id = $id");
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
}