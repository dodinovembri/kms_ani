<?php

class TacitKnowledgeModel extends CI_Model
{
    private $_table = "tacit_knowledge";

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
    
    public function getByIdAll($id)
    {
        $this->db->where_in('id', $id);
        return $this->db->get($this->_table);
    }

    public function getAny()
    {
        $this->db->where('status', 999);
    	return $this->db->get($this->_table);
    }

    public function getWithJoin()
    {
        return $this->db->query("SELECT tacit_knowledge.*, knowledge_category.category_code as category_code, users.name as name FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id");
    }

    public function getWhere()
    {
        return $this->db->query("SELECT tacit_knowledge.*, knowledge_category.category_code as category_code, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id where is_visible_to_visitor = 1 and tacit_knowledge.status = 4");
    }

    public function getWhereKasi()
    {
        return $this->db->query("SELECT tacit_knowledge.*, knowledge_category.category_code as category_code, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id where tacit_knowledge.status = 1");
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
}