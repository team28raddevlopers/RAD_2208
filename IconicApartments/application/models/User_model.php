<?php
    class User_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function register_user($data){
            $this->db->insert('user',$data);
        }

        public function login_user($data){
            $this->db->where('username',$data['username']);
            $this->db->where('password',$data['password']);

            $query= $this->db->get('user');

            if($query->num_rows()==0){
                return false;
            }
            else{
                return $query->row_array();
            }
        }
    }
?>