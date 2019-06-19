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

    public function Reports(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $this->load->view('admin/reports/reports');
    }

    public function registeredResidents(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_resident();
        $this->load->view('admin/Reports/Register/resident',$data);
    }

    public function registeredCoaches(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_coach();
        $this->load->view('admin/Reports/Register/coach',$data4);
    }

    public function registeredInstructors(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_instructor();
        $this->load->view('admin/Reports/Register/instructor',$data3);
    }

    public function registeredMasseur(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_masseur();
        $this->load->view('admin/Reports/Register/masseur',$data2);
    }

    public function registereRequestsResidents(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data["fetch_data"]= $this->AdminRegistrations->fetch_data_resident();
        $this->load->view('admin/Reports/Requests/resident_users',$data);
    }

    public function registereRequestsCoaches(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_coach();
        $this->load->view('admin/Reports/Requests/coach',$data4);
    }

               
                
               

    public function registereRequestsMasseur(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_masseur();
        $this->load->view('admin/Reports/Requests/masseur',$data2);
    }

    public function registereRequestsInstructors(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_instructor();
        $this->load->view('admin/Reports/Requests/instructor',$data3);
    }

    



}