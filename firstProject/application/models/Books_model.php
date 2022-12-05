<?php

class Books_model extends CI_Model{
    protected $table = 'books';

    public function getAll(){
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function getById($id){
        return $this->db->query("SELECT * FROM $this->table WHERE id =?", [$id])->row();
    }

    public function insert($data){
        $statement = ("INSERT INTO $this->table(isbn, title, synopsis, author, publisher, category, language, created_at)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

        return $this->db->query($statement, $data);
    }

    public function update($data, $id){
        $statement = "UPDATE $this->table SET isbn = ?, title = ?, synopsis = ?, author = ?, publisher = ?, category = ?, language = ?, updated_at = ? WHERE id = ?";     
        $data[] = $id;

        return $this->db->query($statement, $data);
    }

    public function delete($id){
        return $this->db->delete($this->table, array('id'=>$id));
    }
}