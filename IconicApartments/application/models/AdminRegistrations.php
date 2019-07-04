<?php

class AdminRegistrations extends CI_Model{

    // to fetch not registered resitent
    public function fetch_data_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }

      // to fetch not registered masseur
    public function fetch_data_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }


  // to fetch not registered instructors
    public function fetch_data_instructor(){

        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();


    }

      // to fetch not registered coach
    public function fetch_data_coach(){

        
        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',0);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }



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
    

      // to fetch registered resident
    public function fetch_data_Register_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

     // to fetch registered masseur
    public function fetch_data_Register_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

     // to fetch registered instructor
    public function fetch_data_Register_instructor(){
      
        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();

    }

     // to fetch registered coach
    public function fetch_data_Register_coach(){

        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',1);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }


     // to fetch removed instructor
    public function fetch_data_Removed_instructor(){

        $this->db->select('instructor.user_id,instructor.instructor_name,instructor.last_name,instructor.tele_num,user.email');
        $this->db->from('instructor');
        $this->db->join('user','instructor.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

     // to fetch removed resident
    public function fetch_data_Removed_resident(){

        $this->db->select('resident.user_id,resident.resident_name,resident.last_name,resident.tele_num,resident.appartment_no');
        $this->db->from('resident');
        $this->db->join('user','resident.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

        // to fetch removed coach
    public function fetch_data_Removed_coach(){

        $this->db->select('coach.user_id,coach.coach_name,coach.last_name,coach.tele_num,user.email');
        $this->db->from('coach');
        $this->db->join('user','coach.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }

        // to fetch removed masseur
    public function fetch_data_Removed_masseur(){

        $this->db->select('masseur.user_id,masseur.masseur_name,masseur.last_name,masseur.tele_num,user.email');
        $this->db->from('masseur');
        $this->db->join('user','masseur.user_id=user.user_id');
        $this->db->where('user.register',5);
        $result=$this->db->get();
        // print_r($result->result_array());
        return $result->result_array();
    }




    // admin regster or remove users in here
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
    


    // admin unregister users here
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
    ?>
