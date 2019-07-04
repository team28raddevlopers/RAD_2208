<?php

class Search_model extends CI_Model{ 

        //this gives the results acording to the serach tag
        public function fetch_data_search(){
        
            $tag=$this->input->post('tag',TRUE);
            // $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
            // $this->db->from('instructor');
            // $this->db->join('user','instructor.user_id=user.user_id');
            // $this->db->where('user.register',1);
            
    
    
            $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no,user.email,user.register,user.login');
            $this->db->from('resident');
            $this->db->join('user','resident.user_id=user.user_id');
            $this->db->like('resident.resident_name', $tag);
            $this->db->or_like('resident.last_name', $tag);
            $this->db->or_like('resident.tele_num', $tag);
            $this->db->or_like('resident.appartment_no', $tag);
            $this->db->or_like('resident.user_id', $tag);    
            $this->db->or_like('user.email', $tag);    
            $result=$this->db->get();
            return $result->result_array();
            }

}