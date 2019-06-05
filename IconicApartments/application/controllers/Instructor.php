<?php
    class Instructor extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
            }
            else{
                redirect('Main/login');
            }
        }

        // public function current_bookings(){
        //     if($this->session->userdata('user_type') == 'instructor'){
        //         $this->load->view('instructor/header');
        //         $this->load->view('instructor/current_bookings');
        //     }
        //     else{
        //         redirect('Main/login');
        //     }
        // }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){

                $uid = $this->session->userdata('user_id');
                $instructor = $this->Gym_model->get_instructorid($uid); //find id of instructor from user id . better way??? 
                $iid = $instructor['instructor_id'];

                $result = $this->Gym_model->get_bookings_instructor($iid, 'pending');
               // $result = false;
                $data['result'] = $result;
        
                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');

                $this->load->view('instructor/header');
                $this->load->view('instructor/pending_bookings',$data);
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
               // $result = false;
                $data['result'] = $result;
        
                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');
                $this->load->view('instructor/header');
                $this->load->view('instructor/current_bookings',$data);
            }
            else{
                redirect('Main/login');
            }
        }

        public function accept_booking(){
            
            $bid = $this->input->post('bidaccept');
            $this->Gym_model->accept_booking($bid);
            // echo 'hello';
            redirect('Instructor/current_bookings');
        }

        public function cancel_booking(){
            $bid = $this->input->post('bid');
            $this->Gym_model->delete_booking($bid);
            redirect('Instructor/current_bookings'); //find way to load same page
        }
    }
?>