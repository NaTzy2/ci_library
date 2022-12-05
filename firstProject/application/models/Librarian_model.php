<?php

class Librarian_model extends CI_Model{
    protected $table = 'librarians';

    public function getAll(){
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function getById($id){
        return $this->db->query("SELECT * FROM $this->table WHERE id =?", [$id])->row();
    }

    public function insert($data){
        $statement = ("INSERT INTO $this->table(username, name, email, password, avatar, created_at)VALUES(?, ?, ?, ?, ?, ?)");

        return $this->db->query($statement, $data);
    }

    public function update($data, $id){
        if($data['avatar']){
            $statement = "UPDATE $this->table SET username = ?, name = ?, email = ?, password = ?, avatar = ?, updated_at = ? WHERE id = ?";
        }else{
            unset($data['avatar']);
            $statement = "UPDATE $this->table SET username = ?, name = ?, email = ?, password = ?, updated_at = ? WHERE id = ?";
        }
        
        $data[] = $id;

        return $this->db->query($statement, $data);
    }

    public function delete($id){
        return $this->db->delete($this->table, array('id'=>$id));
    }
}