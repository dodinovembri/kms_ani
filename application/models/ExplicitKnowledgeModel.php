<?php

class ExplicitKnowledgeModel extends CI_Model
{
    private $_table = "explicit_knowledge";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWithJoin()
    {
        return $this->db->query("SELECT explicit_knowledge.*, knowledge_category.category_code as category_code, users.name as name FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id");
    }

    public function getWithJoinByWhere($id)
    {
        return $this->db->query("SELECT explicit_knowledge.*, knowledge_category.category_code as category_code, users.name as name FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id where explicit_knowledge.status = $id");
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->query("SELECT explicit_knowledge.*, knowledge_category.category_code as category_code, users.name as name FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id where explicit_knowledge.id = $id");
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