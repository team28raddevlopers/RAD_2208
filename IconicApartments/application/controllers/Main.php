<?php
    class Main extends CI_Controller{
       public function index(){
            if($this->session->userdata('user_type') == 'resident'){
                $this->load->view('main/home');
            }
            elseif($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
            }else if($this->session->userdata('user_type') == 'admin'){
               
                $this->load->view('admin/dashboard');
                // $data["fetch_data"]= $this->AdminRegistrations->fetch_data_resident();
                // $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_masseur();
                // $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_instructor();
                // $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_coach();
                // $this->load->view('admin/header_main');
                // $this->load->view('admin/fotter');
                // $this->load->view('admin/resident_users',$data);
                // $this->load->view('admin/masseur',$data2);
                // $this->load->view('admin/instructor',$data3);
                // $this->load->view('admin/coach',$data4);

               
            }else{
                $this->load->view('main/main');
            }   
       } 

       public function test(){
        $this->load->view('instructor/home');
       }

        public function registerRecident(){

            $this->load->view('main/register_recident');

        }

        public function registerEmployee(){
            $this->load->view('main/register_employee');
        }

        public function login(){

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/header_main');
                $this->load->view('main/login');
            }
            else{
                $password = md5($this->input->post('password'));
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $password
                );

                $result = $this->User_model->login_user($data);

                if($result === false){
                    //echo "fail";
                    $this->load->view('main/header_main');
                    $this->load->view('main/login');
                }
                else{
                    //echo "success";
                    $userdata = array(
                        'username' => $result['username'],
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