<?php
    class Gym_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function getInstructors(){
            $query = $this->db->get('instructor');
            //print_r($query->result_array());
            return $query->result_array();
        }

        public function bookInstructor($data){
            $this->db->insert('instructor_booking',$data);
        }
    }
?>