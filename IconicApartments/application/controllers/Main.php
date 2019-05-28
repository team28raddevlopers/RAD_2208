<?php
    class Main extends CI_Controller{
       public function index(){
            if($this->session->userdata('user_type') == 'resident'){
                $this->load->view('main/home');
            }
            elseif($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
            }
            else{
                $this->load->view('main/headerMain');
                $this->load->view('main/main');
            }   
       } 

       public function loginForm(){
            $this->load->view('main/headerMain');
            $this->load->view('main/login');
        }

        public function register(){

            $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[user.email]');
            // $this->form_validation->set_rules('email', 'Email', '');
            $this->form_validation->set_rules('username', 'Username', 'is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm password', 'matches[password]');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/headerMain');
                $this->load->view('main/register');
            }
            else{
                $password = md5($this->input->post('password'));
                $data = array(
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => $password,
                    'user_type' => $this->input->post('type')
                );

                $this->User_model->registerUser($data);

                redirect('Main/index');
            }
        }

        public function login(){

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/headerMain');
                $this->load->view('main/login');
            }
            else{
                $password = md5($this->input->post('password'));
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $password
                );

                $result = $this->User_model->loginUser($data);

                if($result === false){
                    //echo "fail";
                    $this->load->view('main/headerMain');
                    $this->load->view('main/login');
                }
                else{
                    //echo "success";
                    $userdata = array(
                        'user_id' => $result['user_id'],
                        'user_type' => $result['user_type']
                    );
                    $this->session->set_userdata($userdata);

                    // if($this->session->userdata('user_type') == 'resident'){
                    //     $this->load->view('main/home');
                    // }
                    redirect('Main/index');
                }
            }
        }

        public function logout(){
            $userdata = array('user_id', 'user_type');
            $this->session->unset_userdata($userdata);

            redirect('Main/index');
        }
    }
?>