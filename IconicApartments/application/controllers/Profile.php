<?php

class Profile extends CI_Controller{

    public function index(){

        $data['username']=$this->session->userdata('username');
        $username=$data['username'];

        $userData["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_resident_update($username);

        $this->load->view('resident/resident_header',$data);
        $this->load->view('resident/profile',$userData);
        $this->load->view('main/footer');
    }

    public function update(){
        
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('user_id', '45', 'required');
        $this->form_validation->set_rules('lname', '45', 'required');
        // $this->form_validation->set_rules('aptnum', '45', 'required');
        $this->form_validation->set_rules('tpnum', '45','min_length[10]|max_length[10]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('updatefail', 'Not Updated');    
            redirect('Profile');
                
        }
        else
        {
            $response=$this->Profile_update->updateDetails();
            
            
            if($response){
               redirect('main');
            }else{
                $this->session->set_flashdata('updatefail', 'Not Updated');
                redirect('Profile');
            }

        }

    }

}


