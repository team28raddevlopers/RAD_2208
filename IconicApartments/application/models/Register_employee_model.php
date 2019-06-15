<?php

class Register_employee_model extends CI_Model{

    public function InsertEmployee(){
        $data = array(
            'email' => $this->input->post('email',TRUE),
            'username' => $this->input->post('username',TRUE),
            'password' => md5($this->input->post('password',TRUE)),
            'user_type' => $this->input->post('type',TRUE),
            'register' => $this->input->post('register',TRUE)
        );  
 
        $result=$this->db->insert('user',$data);


         $insert_id = $this->db->insert_id();

         return $insert_id;
    }

    public function InsertEmployee2($id){

        $type=$this->input->post('type',TRUE);
        
        if($type=='instructor'){
            $data1 = array(
                'instructor_name' => $this->input->post('fname',TRUE),
                'last_name' => $this->input->post('lname',TRUE),
                'tele_num' => $this->input->post('teleNumber',TRUE),
                'dob'=> $this->input->post('birthday',TRUE),
                'user_id' => $id
            );
            print_r($type);
            return $this->db->insert('instructor',$data1);
        }
        else if($type=='masseur'){
            $data2 = array(
                'masseur_name' => $this->input->post('fname',TRUE),
                'last_name' => $this->input->post('lname',TRUE),
                'tele_num' => $this->input->post('teleNumber',TRUE),
                'dob'=> $this->input->post('birthday',TRUE),
                'user_id' => $id
            );

            return $this->db->insert('masseur',$data2);
        }else if($type=='coach'){
            $data3 = array(
                        'coach_name' => $this->input->post('fname',TRUE),
                        'last_name' => $this->input->post('lname',TRUE),
                        'tele_num' => $this->input->post('teleNumber',TRUE),
                        'dob'=> $this->input->post('birthday',TRUE),
                        'user_id' => $id
                    );
        
                    return $this->db->insert('coach',$data3);
        }
        }
    }
