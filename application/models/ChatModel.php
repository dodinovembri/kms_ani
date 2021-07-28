<?php

class ChatModel extends CI_Model
{
    private $_table = "chat";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWithJoin($sender_id, $receiver_id)
    {
        return $this->db->query("select chat.*, users.name as name, users.image as image from chat join users on chat.send_by_id = users.id where (chat.send_by_id = $sender_id and chat.send_to_id = $receiver_id) or (chat.send_by_id = $receiver_id and chat.send_to_id = $sender_id)");

        // $this->db->select('chat.id as chat_id, users.name as name, users.image as image, chat.message as message, chat.created_at as created_at, chat.send_to_id as send_to_id');
        // $this->db->join('users', 'chat.send_to_id = users.id');
        // $this->db->from($this->_table);
        // $this->db->where('send_by_id', $id);
        // $this->db->order_by('chat.message', 'DESC');
        // $this->db->group_by('send_to_id');
        // return $this->db->get();  
    }

    public function getWithJoinWithoutGroup($user_id, $receiver_id)
    {
        $this->db->select('chat.id as chat_id, users.name as name, users.image as image, chat.message as message, chat.created_at as created_at, chat.send_to_id as send_to_id');
        $this->db->join('users', 'chat.send_to_id = users.id');
        $this->db->from($this->_table);
        $this->db->where("(send_by_id= $user_id AND send_to_id= $receiver_id)");
        return $this->db->get();  
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