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

        public function updateDetails($id, $data, $data2){

            $this->db->where('resident.user_id', $id);
            $this->db->update('resident', $data); 

            $this->db->where('user.user_id', $id);
            $this->db->update('user', $data2); 
        }
    }
?>