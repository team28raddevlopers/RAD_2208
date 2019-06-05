<?php
    class Gym_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function get_instructors(){
            $query = $this->db->get('instructor');
            //print_r($query->result_array());
            return $query->result_array();
        }

        public function book_instructor($data){
            $this->db->insert('instructor_booking',$data);
        }
    }
?>