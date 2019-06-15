<?php
    class Instructor extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){

                $uid = $this->session->userdata('user_id');
                $instructor = $this->Gym_model->get_instructorid($uid); //find id of instructor from user id . better way??? 
                $iid = $instructor['instructor_id'];

                $result = $this->Gym_model->get_bookings_instructor($iid, 'pending');
                $data['result'] = $result;
        
                $this->load->view('instructor/header');
                $this->load->view('instructor/pending_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function current_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){

                $uid = $this->session->userdata('user_id');
                $instructor = $this->Gym_model->get_instructorid($uid); //find id of instructor from user id
                $iid = $instructor['instructor_id'];

                $result = $this->Gym_model->get_bookings_instructor($iid, 'accepted');
                $data['result'] = $result;
        
                $this->load->view('instructor/header');
                $this->load->view('instructor/current_bookings',$data);
            }
            else{
                redirect('Main/login');
            }
        }

        public function accept_booking($bid){
            
            //$bid = $this->input->post('bidaccept');
            $this->Gym_model->accept_booking($bid);
            redirect('Instructor/current_bookings');
        }

        public function cancel_booking($bid){
            //$bid = $this->input->post('bid');
            $this->Gym_model->delete_booking($bid);
            redirect('Instructor/current_bookings'); //find way to load same page
        }
    }
?>