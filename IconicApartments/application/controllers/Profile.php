<?php

class Profile extends CI_Controller{

    public function index(){

        // $data['username']=$this->session->userdata('username');
        // $username=$data['username'];
        $id = $this->session->userdata('user_id');


        if($this->session->userdata('user_type') === 'resident'){
            $result = $this->Profile_update->fetch_data_Register_resident_update($id);
            $data['user'] = $result;

            $this->load->view('resident/resident_header');
            $this->load->view('resident/user_profile',$data);
            $this->load->view('main/footer');
        }

        else if($this->session->userdata('user_type') === 'instructor'){
            $result = $this->Profile_update->fetch_data_Register_instructor_update($id);
            $data['user'] = $result;

            $this->load->view('instructor/header');
            $this->load->view('instructor/profile',$data);
            $this->load->view('main/footer');
        }

        else if($this->session->userdata('user_type') === 'masseur'){
            $result = $this->Profile_update->fetch_data_Register_masseur_update($id);
            $data['user'] = $result;

            $this->load->view('masseur/header');
            $this->load->view('masseur/profile',$data);
            $this->load->view('main/footer');
        }

        else if($this->session->userdata('user_type') === 'coach'){
            $result = $this->Profile_update->fetch_data_Register_coach_update($id);
            $data['user'] = $result;

            $this->load->view('coach/header');
            $this->load->view('coach/profile',$data);
            $this->load->view('main/footer');
        }
       
    }

    public function update($table, $name){
        
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        // $this->form_validation->set_rules('apptno', 'Appartment Number', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        // $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        // $this->form_validation->set_rules('tpnum', 'Contact No','required|min_length[10]|max_length[10]');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('updatefail', 'Not Updated');    
            redirect('Profile');
                
        }
        else{
            $id = $this->session->userdata('user_id');

            $data = array(
                $name => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'tele_num' => $this->input->post('tpnum'),
             );   
            
            $data2 = array(
                 'username' =>$this->input->post('username'),
                 'email' => $this->input->post('email')
            );

             $this->Profile_update->updateDetails($table, $id, $data, $data2);

             redirect('Profile');
        }

    }

}


