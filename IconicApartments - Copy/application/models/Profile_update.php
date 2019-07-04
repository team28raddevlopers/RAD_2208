<?php
    class Profile_update extends CI_Model {

        public function fetch_data_Register_resident_update($id){

            // $query = $this->db->query("SELECT resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no FROM resident,user where resident.user_id=user.user_id AND user.username='$username'");
            // return $query;
            $this->db->select('resident.*, user.*');
            $this->db->from('user');
            $this->db->join('resident','resident.user_id=user.user_id');
            $this->db->where('user.user_id',$id);
            $result=$this->db->get();
            return $result->row_array();
        }

        public function fetch_data_Register_instructor_update($id){

            $this->db->select('instructor.*, user.*');
            $this->db->from('user');
            $this->db->join('instructor','instructor.user_id=user.user_id');
            $this->db->where('user.user_id',$id);
            $result=$this->db->get();
            return $result->row_array();
        }

        public function fetch_data_Register_masseur_update($id){

            $this->db->select('masseur.*, user.*');
            $this->db->from('user');
            $this->db->join('masseur','masseur.user_id=user.user_id');
            $this->db->where('user.user_id',$id);
            $result=$this->db->get();
            return $result->row_array();
        }

        public function fetch_data_Register_coach_update($id){

            $this->db->select('coach.*, user.*');
            $this->db->from('user');
            $this->db->join('coach','coach.user_id=user.user_id');
            $this->db->where('user.user_id',$id);
            $result=$this->db->get();
            return $result->row_array();
        }

        public function updateDetails($table,$id, $data, $data2){

            $this->db->where('user_id', $id);
            $this->db->update($table, $data); 

            $this->db->where('user.user_id', $id);
            $this->db->update('user', $data2); 
        }
    }
?>