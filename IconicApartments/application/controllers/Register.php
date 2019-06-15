<?php

class Register extends CI_Controller{

    

    public function RegisterUser(){
            
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('teleNumber', 'Contact number', 'required');
            $this->form_validation->set_rules('apartmentNumber', 'Appartment Number', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Last Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('type', 'Recident', 'required');
            $this->form_validation->set_rules('register', '0', 'required');
            
            

            if ($this->form_validation->run() == FALSE)
                    {

                            $this->load->view('main/register_recident');
                    }
                    
                    else
                    {
                        $this->load->model('Register_recident_model');
                        $response=$this->Register_recident_model->insertRecident();
                        $response2=$this->Register_recident_model->insertRecident2($response);
                       
                       
                        if($response){
                            $this->session->set_flashdata('msg',"Your informations are send to the Administrator..! please login after a few seconds!"); 
                            $this->load->view('main/message');
                        }else{
                            $this->load->view('main/register_recident');
                        }

                    }
        }


        public function RegisterEmployee(){

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('teleNumber', 'Contact number', 'required');
            $this->form_validation->set_rules('birthday', '2019-01-01', 'required');
            $this->form_validation->set_rules('type', 'instructor', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Last Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]|is_unique[user.password]');
            $this->form_validation->set_rules('register', '0', 'required');
            
            
            if ($this->form_validation->run() == FALSE)
                    {

                            $this->load->view('main/register_employee');
                    }
                    
                    else
                    {
                        $response=$this->Register_employee_model->InsertEmployee();
                        $response2=$this->Register_employee_model->InsertEmployee2($response);
                        
                        if($response2){
                            $this->session->set_flashdata('msg',"Your informations are send to the Administrator..! please login after a few seconds!"); 
                            $this->load->view('main/message');
                        }else{
                            $this->load->view('main/register_employee');
                        }

                    }
        }


        public function AdminRegisterUsers(){
            
            $response=$this->AdminRegistrations->AdminUpdateUser();
            if($response){
                redirect('AdminDashboard/RegisterRequests');
            }

        }

        public function AdminUnregisterUsers(){
            $response=$this->AdminRegistrations->AdminUnregisterUser();
            if($response){
                redirect('AdminDashboard/Registered');
            }
        }
       

}

