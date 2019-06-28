<?php

class AdminDashboard extends CI_Controller{

    public function index(){
                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['username']=$this->session->userdata('username');
                $data['num'] = count($notifications);
                $this->load->view('admin/dashboard', $data);
    }

    public function RegisterRequests(){

                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['username']=$this->session->userdata('username');
                $data['num'] = count($notifications);

                $this->load->view('admin/header_main',$data);
                $this->load->view('admin/Buttons');
                $this->load->view('main/footer');

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
                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['username']=$this->session->userdata('username');
                // $data['notifications']=$notifications;
                $data['num'] = count($notifications);

                $this->load->view('admin/header_main',$data);
                $this->load->view('admin/Buttons');
                $this->load->view('main/footer');

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

        $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
        $data['username']=$this->session->userdata('username');
        // $data['notifications']=$notifications;
        $data['num'] = count($notifications);

        $this->load->view('admin/header_main',$data);
        $this->load->view('admin/reports/reports');
        $this->load->view('main/footer');
        
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
        $this->load->view('admin/Reports/Requests/resident',$data);
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

    public function removedInstructors(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_instructor();
        $this->load->view('admin/Reports/Removed/instructor',$data3);
    }

    
    public function removedResident(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_resident();
        $this->load->view('admin/Reports/Removed/resident',$data3);
    }

    public function removedMasseur(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_masseur();
        $this->load->view('admin/Reports/Removed/masseur',$data3);
    }

    public function removedCoach(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_coach();
        $this->load->view('admin/Reports/Removed/coach',$data3);
    }

//controllers to handle bookings

    public function spa_pending_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
            $data['notifications']=$notifications;
            $data['num'] = count($notifications);

            $result = $this->Bookings_model->spa_get_bookings('pending');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main',$data);
            $this->load->view('admin/spa_bookings/pending_bookings',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function tennis_pending_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
            $data['notifications']=$notifications;
            $data['num'] = count($notifications);

            $result = $this->Bookings_model->tennis_get_bookings('pending');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main',$data);
            $this->load->view('admin/tennis_bookings/pending_bookings',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function accept_booking($bid,$table){

        $notification = array(
            'title' => $this->input->post('title'),
            'from_id' => $this->session->userdata('user_id'),
            'to_id' => $this->input->post('uid'),
            'message' => $this->input->post('accept-message'),
            'type' => $this->input->post('type'),
            'booking_id' => $this->input->post('id'),
            'visibility' => 1
        );
        $this->User_model->add_notification($notification);
        
        if($table === 'spa'){
            $this->Bookings_model->spa_update_accept($bid);
            redirect('AdminDashboard/spa_pending_bookings');
        }
        if($table === 'tennis'){
            $this->Bookings_model->tennis_update_accept($bid);
            redirect('AdminDashboard/tennis_pending_bookings');
        }
    }

    public function reject_booking($bid, $table){

        $notification = array(
            'title' => $this->input->post('title'),
            'from_id' => $this->session->userdata('user_id'),
            'to_id' => $this->input->post('ruid'),
            'message' => $this->input->post('accept-message'),
            'type' => $this->input->post('type'),
            'booking_id' => $this->input->post('rid'),
            'visibility' => 1
        );
        $this->User_model->add_notification($notification);
        
        if($table === 'spa'){
            $this->Bookings_model->spa_update_reject($bid);
            redirect('AdminDashboard/spa_pending_bookings');
        }
        if($table === 'tennis'){
            $this->Bookings_model->tennis_update_reject($bid);
            redirect('AdminDashboard/tennis_pending_bookings');
        }
    }

}