<?php

class Register_recident_model extends CI_Model{

    public function insertRecident(){
        $data = array(
            'email' => $this->input->post('email',TRUE),
            'username' => $this->input->post('username',TRUE),
            'password' => md5($this->input->post('password',TRUE)),
            'user_type' => $this->input->post('type',TRUE),
            'register' => $this->input->post('register',TRUE)
        );  
 
         $this->db->insert('user',$data);

         $insert_id = $this->db->insert_id();

         return $insert_id;
    }



    public function insertRecident2($id){

        $data2 = array(
            'resident_name'=> $this->input->post('fname',TRUE),
            'last_name' => $this->input->post('lname',TRUE),
            'tele_num' =>$this->input->post('teleNumber',TRUE),
            'appartment_no' => $this->input->post('apartmentNumber',TRUE),
            'user_id' => $id
        );

       return $this->db->insert('resident',$data2);
    }
    
    }
