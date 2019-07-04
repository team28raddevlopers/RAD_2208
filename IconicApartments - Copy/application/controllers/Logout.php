<?php

    class Logout extends CI_Controller{

        public function loggingout(){
            
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_type');

        redirect("Main");

        }

        
    }

    ?> 