<?php

class Register extends CI_Controller{

    

    public function RegisterUser(){
            
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('teleNumber', 'Contact number', 'required');
            $this->form_validation->set_rules('apartmentNumber', 'Appartment Number', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Last Name', 'required|is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|is_unique[user.password]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('type', 'Recident', 'required');
            $this->form_validation->set_rules('register', '0', 'required');
            
            

            if (($this->form_validation->run() == FALSE) && ($this->input->post('submit') != NULL ))
                    {

                            $this->load->view('main/register_recident');
                    }
                    
                    else
                    {
                        
                        $this->load->model('Register_recident_model');
                        $response=$this->Register_recident_model->insertRecident();
                        $response2=$this->Register_recident_model->insertRecident2($response);

                        $notification = array(
                            'title' => $this->input->post('ntitle'),
                            'from_id' => $response,
                            'to_id' => $this->input->post('toid'),
                            'type' => $this->input->post('ntype'),
                            'visibility' => 1
                        );
                        $this->User_model->add_notification($notification);
                       
                       
                        if($response){
                            $this->session->set_flashdata('msg',"You request has been sent to the administrator. You will recive an email when your request is accepted"); 
                            // $this->load->view('main/message');

                            redirect('Main/index');

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
            $this->form_validation->set_rules('username', 'Last Name', 'required|is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|is_unique[user.password]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('register', '0', 'required');
            
            
            if ($this->form_validation->run() == FALSE)
                    {

                            $this->load->view('main/register_employee');
                    }
                    
                    else
                    {
                        $response=$this->Register_employee_model->InsertEmployee();
                        $response2=$this->Register_employee_model->InsertEmployee2($response);

                        $notification = array(
                            'title' => $this->input->post('ntitle'),
                            'from_id' => $response,
                            'to_id' => $this->input->post('toid'),
                            'type' => $this->input->post('ntype'),
                            'visibility' => 1
                        );
                        $this->User_model->add_notification($notification);
                        
                        if($response2 || $response){
                            $this->session->set_flashdata('msg',"Your request has been sent to the Administrator. You will recive an email when your request is accepted"); 
                            // $this->load->view('main/message');

                            redirect('Main/index');

                        }else{
                            $this->load->view('main/register_employee');
                        }

                    }
        }


        public function AdminRegisterUsers(){


            
            $response=$this->AdminRegistrations->AdminUpdateUser();
            if($response){
                    // POST data
                    $postData = $this->input->post();
                    $reciverEmail= $response['email'];

                    $config['protocol']    = 'smtp';
                    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                    $config['smtp_port']    = '465';
                    $config['smtp_timeout'] = '7';
                    $config['smtp_user']    = 'radteam28@gmail.com';
                    $config['smtp_pass']    = 'team28rad2017cs';
                    $config['charset']    = 'utf-8';
                    $config['newline']    = "\r\n";
                    $config['mailtype'] = 'html';
                    $config['validation'] = FALSE;

                    $this->load->library('email');
                    $this->email->initialize($config);
                    $this->email->from('radteam28@gmail.com', 'Iconic Apartments');
                    $this->email->to($reciverEmail);
                    $this->email->subject('Request accepted');
                    $this->email->message('Your request has been accepted you can login through this url http://localhost/IconicApartments/index.php/main/login');
                    $this->email->set_newline("\r\n");
                    $result = $this->email->send();
                redirect('AdminDashboard/RegisterRequests');
            }else{
                echo "Not register";
            }

        }

        public function AdminUnregisterUsers(){

            $response=$this->AdminRegistrations->AdminUnregisterUser();
            if($response){
                redirect('AdminDashboard/Registered');
            }
        }
       

}


