<?php

class AdminDashboard extends CI_Controller{

    public function index(){
 
                $this->load->view('admin/dashboard');
    }

    public function RegisterRequests(){
                $this->load->view('admin/header_main');
                $this->load->view('admin/fotter');
                $data["fetch_data"]= $this->AdminRegistrations->fetch_data_resident();
                $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_masseur();
                $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_instructor();
                $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_coach();
                $this->load->view('admin/RegisterRequests/resident_users',$data);
                $this->load->view('admin/RegisterRequests/masseur',$data2);
                $this->load->view('admin/RegisterRequests/instructor',$data3);
                $this->load->view('admin/RegisterRequests/coach',$data4);
    }

    public function Registered(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
                $data["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_resident();
                $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_masseur();
                $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_instructor();
                $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_coach();
                $this->load->view('admin/Registered/resident_users',$data);
                $this->load->view('admin/Registered/masseur',$data2);
                $this->load->view('admin/Registered/instructor',$data3);
                $this->load->view('admin/Registered/coach',$data4);

    }

    public function CurrentBookings(){
        
    }

}