<?php
    class Main extends CI_Controller{
       public function index(){
            if($this->session->userdata('user_type') == 'resident'){
                $this->load->view('main/home');
                $this->load->view('main/footer');
            }
            elseif($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
                $this->load->view('main/footer');
            }
            else{
                $this->load->view('main/header_main');
                $this->load->view('main/main');
                $this->load->view('main/footer');
            }   
        } 

        public function register(){

            $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('username', 'Username', 'is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm password', 'matches[password]');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/header_main');
                $this->load->view('main/register');
                $this->load->view('main/footer');
            }
            else{
                $password = md5($this->input->post('password'));
                $data = array(
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => $password,
                    'user_type' => $this->input->post('type')
                );

                $this->User_model->register_user($data);

                redirect('Main/index');
            }
        }

        public function login(){

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/header_main');
                $this->load->view('main/login');
                $this->load->view('main/footer');
            }
            else{
                $password = md5($this->input->post('password'));
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $password
                );

                $result = $this->User_model->login_user($data);

                if($result === false){
                    $this->session->set_flashdata('login_error', 'Invalid Login Credentials');
                    $this->load->view('main/header_main');
                    $this->load->view('main/login');
                    $this->load->view('main/footer');
                }
                else{
                    $userdata = array(
                        'username' => $result['username'],
                        'user_id' => $result['user_id'],
                        'user_type' => $result['user_type']
                    );
                    $this->session->set_userdata($userdata);
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