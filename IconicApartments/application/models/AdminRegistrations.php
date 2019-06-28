<?php

class AdminRegistrations extends CI_Model{

    public function fetch_data_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }

    public function fetch_data_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

    public function fetch_data_instructor(){

        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();


    }
    public function fetch_data_coach(){

        
        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }



    public function fetch_data_Register_resident_update($username){

        $query = $this->db->query("SELECT resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no FROM resident,user where resident.user_id=user.user_id AND user.username='$username'");
        return $query;
    }
    

    public function fetch_data_Register_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

    public function fetch_data_Register_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }


    public function fetch_data_Register_instructor(){
      
        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }
    public function fetch_data_Register_coach(){

        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }


    public function fetch_data_Removed_instructor(){

        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }


    public function fetch_data_Removed_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

    public function fetch_data_Removed_coach(){

        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

    public function fetch_data_Removed_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }





    public function AdminUpdateUser(){

        $id=$this->input->post('user_id',TRUE);
        $remove=$this->input->post('remove',TRUE);
        $register=$this->input->post('register',TRUE);
        $id2=0;
        $login=0;
        if($remove=='remove'){
            $id2=5;
            $login=0;
        }elseif($register='register'){
            $id2=1;
            $login=1;
        }

        $data = array(
            'user_id' => $this->input->post('user_id',TRUE),
            'register' => $id2,
            'login' => $login
         );

        $this->db->where('user_id', $id);
        $this->db->update('user', $data); 

        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('user_id',$id);
        $result=$this->db->get();
        return $result->row_array();
    }

    public function AdminUnregisterUser(){
        $id=$this->input->post('user_id',TRUE);

        $remove=$this->input->post('remove',TRUE);
        $register=$this->input->post('register',TRUE);
        $id2=0;
        
        if($remove=='remove'){
            $id2=5;
    
        }elseif($register='unregister'){
            $id2=0;
            
        }

        $data = array(
            'user_id' => $this->input->post('user_id',TRUE),
            'register' => $id2,
            'login'=> 0
         );
        $this->db->where('user_id', $id);
        return $this->db->update('user', $data); 
    }
}  
    ?>
