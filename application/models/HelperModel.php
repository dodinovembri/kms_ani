<?php

class HelperModel extends CI_Model
{
    public function getWithUnion()
    {
        return $this->db->query("SELECT id, knowledge_category_id, title, content, is_tacit, created_at, creator_id FROM tacit_knowledge WHERE status != 0 UNION SELECT id, knowledge_category_id, title, content, is_tacit, created_at, creator_id FROM explicit_knowledge WHERE status != 0");
    } 
}