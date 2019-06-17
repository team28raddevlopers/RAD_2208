<?php

class Profile extends CI_Controller{

    public function index(){
        $data['username']=$this->session->userdata('username');
        $this->load->view('resident/resident_header',$data);
        $this->load->view('resident/profile');
    }

}
