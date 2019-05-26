<?php
    class User_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function registerUser($data){
            $this->db->insert('users',$data);
        }

        public function loginUser($data){
            $this->db->where('username',$data['username']);
            $this->db->where('password',$data['password']);

            $query= $this->db->get('users');

            if($query->num_rows()==0){
                return false;
            }
            else{
                return $query->row_array();
            }
        }
    }
?>