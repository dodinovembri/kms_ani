<?php

class HelperModel extends CI_Model
{
    public function getWithUnionAll()
    {
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4");
    }

    public function getWithUnionMyAll()
    {
        $user_id = $this->session->userdata('id');
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 AND tacit_knowledge.created_at = $user_id UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4 AND explicit_knowledge.created_at = $user_id");
    }    

    public function getWithUnion()
    {
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 2 UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 2");
    } 
    
    public function getWithUnionKasi()
    {
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 1 UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 1");
    }   

    public function getWithUnionKasiMyAll()
    {
        $user_id = $this->session->userdata('id');
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 AND tacit_knowledge.created_at = $user_id UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4 AND explicit_knowledge.created_at = $user_id");
    }        
    
    public function getWithUnionKasiAll()
    {
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4");
    }       

    public function getWithUnionVisitor()
    {
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 and tacit_knowledge.is_visible_to_visitor = 1 UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4 and explicit_knowledge.is_visible_to_visitor = 1");
    } 
    
    public function getWithUnionMyVisitor()
    {
        $user_id = $this->session->userdata('id');
        return $this->db->query("SELECT tacit_knowledge.id as id, knowledge_category.category_code as category_code, tacit_knowledge.title as title, tacit_knowledge.content as content, tacit_knowledge.is_tacit as is_tacit, tacit_knowledge.created_at as created_at, users.name as name, tacit_knowledge.status as status FROM tacit_knowledge JOIN knowledge_category ON tacit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON tacit_knowledge.creator_id = users.id WHERE tacit_knowledge.status = 4 and tacit_knowledge.is_visible_to_visitor = 1 AND tacit_knowledge.created_at = $user_id UNION SELECT explicit_knowledge.id as id, knowledge_category.category_code as category_code, explicit_knowledge.title as title, explicit_knowledge.content as content, explicit_knowledge.is_tacit as is_tacit, explicit_knowledge.created_at as created_at, users.name as name, explicit_knowledge.status as status FROM explicit_knowledge JOIN knowledge_category ON explicit_knowledge.knowledge_category_id = knowledge_category.id JOIN users ON explicit_knowledge.creator_id = users.id WHERE explicit_knowledge.status = 4 and explicit_knowledge.is_visible_to_visitor = 1 AND explicit_knowledge.created_at = $user_id");
    }     

    public function getWithUnionById($id)
    {        
        return $this->db->query("SELECT tacit_knowledge.id as id, tacit_knowledge.is_tacit as is_tacit from tacit_knowledge WHERE tacit_knowledge.status = 2 and tacit_knowledge.id = $id UNION SELECT explicit_knowledge.id as id, explicit_knowledge.is_tacit as is_tacit from explicit_knowledge WHERE explicit_knowledge.status = 2 and explicit_knowledge.id = $id");
    }

    public function getWithUnionByIdKasi($id)
    {        
        return $this->db->query("SELECT tacit_knowledge.id as id, tacit_knowledge.is_tacit as is_tacit from tacit_knowledge WHERE tacit_knowledge.status = 1 and tacit_knowledge.id = $id UNION SELECT explicit_knowledge.id as id, explicit_knowledge.is_tacit as is_tacit from explicit_knowledge WHERE explicit_knowledge.status = 1 and explicit_knowledge.id = $id");
    }    
}