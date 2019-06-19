<?php
    class Profile_update extends CI_Model {

        public function updateDetails(){

            $id=$this->input->post('user_id',TRUE);    
            $data = array(
                'resident_name' => $this->input->post('fname',TRUE),
                'last_name' => $this->input->post('lname',TRUE),
                'tele_num' => $this->input->post('tpnum',TRUE)
                // 'appartment_no' => $this->input->post('aptnum',TRUE)

             );   
            $this->db->where('user_id', $id);
            return $this->db->update('resident', $data); 
        }
    }
?>