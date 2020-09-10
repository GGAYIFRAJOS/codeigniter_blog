<?php

class Post_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_posts($slag = false){

        if($slag === false){
            $query = $this->db->get('posts');

            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('slag' => $slag));

        return $query->row_array();
    }
}