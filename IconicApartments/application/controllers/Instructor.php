<?php
    class Instructor extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
            }
        }

        public function current_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/current_bookings');
            }
        }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/pending_bookings');
            }
        }
    }
?>