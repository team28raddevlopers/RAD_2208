<?php
    class Instructor extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/home');
            }
        }

        public function currentBookings(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/currentBookings');
            }
        }

        public function pendingBookings(){
            if($this->session->userdata('user_type') == 'instructor'){
                $this->load->view('instructor/header');
                $this->load->view('instructor/pendingBookings');
            }
        }
    }
?>