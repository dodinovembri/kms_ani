<?php

class KnowledgeCategoryModel extends CI_Model
{
    private $_table = "knowledge_category";

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

    public function getByWhere($category_id)
    {
        return $this->db->query("SELECT id, knowledge_category_id, title, content, is_tacit, created_at FROM tacit_knowledge WHERE status != 0 UNION SELECT id, knowledge_category_id, title, content, is_tacit, created_at FROM explicit_knowledge WHERE status != 0");
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
    
    public function getNotWhere($status)
    {
        $this->db->where('status !=', $status);
        return $this->db->get($this->_table);
    }

    public function getWhere($status)
    {
        $this->db->where('status', $status);
        return $this->db->get($this->_table);
    }      
}