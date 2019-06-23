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

        public function get_notifications($uid){
            $this->db->where('notification.to_id', $uid);
            $this->db->where('visibility', 1);
            $query = $this->db->get('notification');

            return $query->result_array();
        }

        public function delete_notification($id){
            $update = array('visibility'=> '0');
            $this->db->where('notification.notification_id', $id);
            $this->db->update('notification', $update);
        }

        public function add_notification($data){
            $this->db->insert('notification', $data);
        }
    }
?>