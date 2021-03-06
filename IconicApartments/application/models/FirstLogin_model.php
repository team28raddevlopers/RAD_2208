<?php

class FirstLogin_model extends CI_Model{ 

    public function fetch_data_resident(){

        $query = $this->db->query("SELECT resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no FROM resident,user where resident.user_id=user.user_id AND user.login='1'");
        
        return $query;
    }

    public function fetch_data_masseur(){

        $query = $this->db->query("SELECT masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email FROM masseur,user where masseur.user_id=user.user_id AND user.login='1'");
        
        return $query;
    }
    public function fetch_data_instructor(){

        $query = $this->db->query("SELECT instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email FROM instructor,user where instructor.user_id=user.user_id AND user.login='1'");
        
        return $query;
    }
    public function fetch_data_coach(){

        $query = $this->db->query("SELECT coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email FROM coach,user where coach.user_id=user.user_id AND user.login='1'");
        
        return $query;
    }

    public function UpdateLogin($user_id){

        $id=$user_id;
        $data = array(
            'login' => 1
         );

        $this->db->where('user_id', $id);
        return $this->db->update('user', $data); 
    }


    public function UpdateLogout($user_id){

        $id=$user_id;
        $data = array(
            'login' => 0
         );

        $this->db->where('user_id', $id);
        return $this->db->update('user', $data); 
    }
    


}