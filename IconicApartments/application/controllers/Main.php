<?php
    class Main extends CI_Controller{
       
       public function index(){

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
            $data['username']=$this->session->userdata('username');
            // $data['notifications']=$notifications;
            $data['num'] = count($notifications);

            if($this->session->userdata('user_type') == 'resident'){
                $this->load->view('resident/resident_header',$data);
                $this->load->view('resident/resident_home');
                $this->load->view('main/footer');
            }
            elseif($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header',$data);
                $this->load->view('instructor/home');
                $this->load->view('main/footer');

            }
            elseif($this->session->userdata('user_type') == 'masseur'){
                $this->load->view('masseur/header');
                $this->load->view('masseur/home');
                $this->load->view('main/footer');

            }
            elseif($this->session->userdata('user_type') == 'coach'){
                $this->load->view('coach/header');
                $this->load->view('coach/home');
                $this->load->view('main/footer');

            }
            else if($this->session->userdata('user_type') == 'admin'){
                $data['residents'] = count($this->User_model->get_count('resident'));
                $data['instructors'] = count($this->User_model->get_count('instructor'));
                $data['coaches'] = count($this->User_model->get_count('coach'));
                $data['masseurs'] = count($this->User_model->get_count('masseur'));
                $data['spa'] = count($this->User_model->get_count('spa_room_booking'));
                $data['tennis'] = count($this->User_model->get_count('tennis_court_booking'));
                $this->load->view('admin/header_main',$data);
                $this->load->view('admin/dashboard');

            }
            else{
                $this->load->view('main/header_main');
                $this->load->view('main/main');
                $this->load->view('main/footer');            }   
       } 

       public function test(){
        $this->load->view('instructor/home');
       }

        public function registerRecident(){
            $this->load->view('main/register_header');
            $this->load->view('main/register_recident');
            $this->load->view('main/footer');            
        }

        public function registerEmployee(){
            $this->load->view('main/register_header');
            $this->load->view('main/register_employee');
            $this->load->view('main/footer');            
        }

        public function login(){

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('main/register_header');
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

                if($result === false || $result['register'] == 0){
                    if($result === false){
                        $this->session->set_flashdata('login_error', 'Invalid Login Credentials');
                    }
                    else{
                        $this->session->set_flashdata('login_error', 'Your Regstration Request Is Not Accepted Yet');
                    }
                    $this->load->view('main/header_main');
                    $this->load->view('main/login');
                    $this->load->view('main/footer');
                }
                else{
                    $notifications =$this->User_model->get_notifications($result['user_id']);
                    $lognStatus=$this->FirstLogin_model->UpdateLogin($result['user_id']);

                    $userdata = array(
                        'username' => $result['username'],
                        'user_id' => $result['user_id'],
                        'user_type' => $result['user_type'],
                        'notifications' => count($notifications)
                    );
                    $this->session->set_userdata($userdata);

                    redirect('Main/index');
                }
            }
        }

        public function logout(){
            $userdata = array('user_id', 'user_type');
            $user_id=$this->session->userdata('user_id');
            $lognStatus=$this->FirstLogin_model->UpdateLogout($user_id);
            $this->session->unset_userdata($userdata);
            redirect('Main/index');
        }

        public function notifications(){
            $data['username']=$this->session->userdata('username');

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));

            $data['notifications']=$notifications;
            $data['num'] = count($notifications);

            if($this->session->userdata('user_type') == 'resident'){
                $this->load->view('resident/resident_header', $data);
                $this->load->view('resident/notifications', $data);
                $this->load->view('main/footer');
            }

            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header', $data);
                $this->load->view('instructor/notifications', $data);
                $this->load->view('main/footer');
            }

            if($this->session->userdata('user_type') == 'admin'){
                $this->load->view('admin/header_main', $data);
                $this->load->view('admin/notifications', $data);
            }

            if($this->session->userdata('user_type') == 'masseur'){
                $this->load->view('masseur/header', $data);
                $this->load->view('masseur/notifications', $data);
                $this->load->view('main/footer');
            }

            if($this->session->userdata('user_type') == 'coach'){
                $this->load->view('coach/header', $data);
                $this->load->view('coach/notifications', $data);
                $this->load->view('main/footer');
            }

        }
        public function delete_notification($id){
            $this->User_model->delete_notification($id);

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
            $num = count($notifications);

            $this->session->set_userdata('notifications', $num);

            redirect('Main/notifications');
        }
       public function view_notification($page, $func, $id){
            $this->User_model->delete_notification($id);

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
            $num = count($notifications);

            $this->session->set_userdata('notifications', $num);
            redirect($page.'/'.$func);
       }

    }
?>