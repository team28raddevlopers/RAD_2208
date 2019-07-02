<?php
    class pool_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function get_attendence($uid){
             $this->db->where('pool_attendance.user_id', $uid);
            $query = $this->db->get('pool_attendance');
            //print_r($query->result_array());
            return $query->result_array();
        }
     

        public function mark_attendance($data){
            $this->db->insert('pool_attendance',$data);
        }
       
    
       

    }
?>