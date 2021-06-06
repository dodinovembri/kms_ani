<?php

class TacitCommentModel extends CI_Model
{
    private $_table = "tacit_comment";

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

    public function getByWhere($id)
    {
        return $this->db->query("select tacit_comment.*, users.name as name, users.image as image from tacit_comment JOIN users ON tacit_comment.creator_id = users.id where tacit_knowledge_id = $id");
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