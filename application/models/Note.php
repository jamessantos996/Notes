<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Note extends CI_Model{
        function get_all_notes(){
            return $this->db->query("SELECT * FROM notes")->result_array();
        }

        function add_note($data){
            $query = "INSERT INTO notes(title, description, updatedAt, createdAt) 
                    VALUES(?,?,?,?)";
            $values = array($data['title'], $data['description'], date("F j, Y, g:i a"), date("F j, Y, g:i a"));
            return $this->db->query($query, $values);
        }

        function update_note($data){
            $query = "UPDATE notes SET description = ? , updatedAt = ? WHERE id = ?";
            $values = array($data['description'], date("F j, Y, g:i a"), $data['id']);
            return $this->db->query($query,$values);
        }

        function delete_note($id){
            return $this->db->query("DELETE FROM notes WHERE id = ?", $id);
        }
    }
?>