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
    
    public function getReport()
    {
        return $this->db->query("SELECT COUNT(*) AS total, EXTRACT(YEAR_MONTH FROM created_at) as tanggal from explicit_knowledge group by tanggal");
    }

    public function getReportByCategory()
    {
        return $this->db->query("SELECT COUNT(*) AS total, knowledge_category.category_code as category_code from explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id group by explicit_knowledge.knowledge_category_id");
    }
}