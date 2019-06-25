<?php

class FirstLogin extends CI_Controller{

    public function index(){

        $this->load->view('main/header_main');
        $this->load->view('main/footer');
        
        $data["fetch_data"]= $this->FirstLogin_model->fetch_data_resident();
        $data2["fetch_data"]= $this->FirstLogin_model->fetch_data_masseur();
        $data3["fetch_data"]= $this->FirstLogin_model->fetch_data_instructor();
        $data4["fetch_data"]= $this->FirstLogin_model->fetch_data_coach();
        $this->load->view('admin/FirstLogin/resident_users',$data);
        $this->load->view('admin/FirstLogin/masseur',$data2);
        $this->load->view('admin/FirstLogin/instructor',$data3);
        $this->load->view('admin/FirstLogin/coach',$data4);

    }

    public function First_login(){

        $result = $this->FirstLogin_model->UpdateLogin();

        if($result){
            redirect('main/login');
        }else{
            $this->load->view('main');
        }

    }
                
}