<?php

class AdminDashboard extends CI_Controller{

    public function index(){
        
        if($this->session->userdata('user_type') == 'admin'){
            $this->load->view('admin/header_main');
            $this->load->view('admin/dashboard');
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function RegisterRequests(){

        if($this->session->userdata('user_type') == 'admin'){
            $this->load->view('admin/header_main');
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
        else{
            redirect('Main/login');
        }
    }

    public function Registered(){
       
        if($this->session->userdata('user_type') == 'admin'){
            $this->load->view('admin/header_main');
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
        else{
            redirect('Main/login');
        }
    }

    public function Reports(){

        if($this->session->userdata('user_type') == 'admin'){
            $this->load->view('admin/header_main');
            $this->load->view('admin/reports/reports');
            $this->load->view('main/footer');    
        }
        else{
            redirect('Main/login');
        }
        
    }

    public function registeredResidents(){

        if($this->session->userdata('user_type') == 'admin'){
            $data["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_resident();
            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Register/resident',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registeredCoaches(){

        if($this->session->userdata('user_type') == 'admin'){
            $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_coach();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Register/coach',$data4);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registeredInstructors(){

        if($this->session->userdata('user_type') == 'admin'){
            $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_instructor();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Register/instructor',$data3);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registeredMasseur(){

        if($this->session->userdata('user_type') == 'admin'){
            $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_Register_masseur();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Register/masseur',$data2);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registereRequestsResidents(){
        
        if($this->session->userdata('user_type') == 'admin'){
            $data["fetch_data"]= $this->AdminRegistrations->fetch_data_resident();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Requests/resident',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registereRequestsCoaches(){

        if($this->session->userdata('user_type') == 'admin'){
            $data4["fetch_data"]= $this->AdminRegistrations->fetch_data_coach();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Requests/coach',$data4);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }
               

    public function registereRequestsMasseur(){

        if($this->session->userdata('user_type') == 'admin'){
            $data2["fetch_data"]= $this->AdminRegistrations->fetch_data_masseur();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Requests/masseur',$data2);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function registereRequestsInstructors(){

        if($this->session->userdata('user_type') == 'admin'){
            $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_instructor();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Requests/instructor',$data3);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function removedInstructors(){

        if($this->session->userdata('user_type') == 'admin'){
            $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_instructor();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Removed/instructor',$data3);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    
    public function removedResident(){
    
        if($this->session->userdata('user_type') == 'admin'){
            $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_resident();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Removed/resident',$data3);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function removedMasseur(){

        
    }

    public function removedCoach(){
       
        if($this->session->userdata('user_type') == 'admin'){
            $data3["fetch_data"]= $this->AdminRegistrations->fetch_data_Removed_coach();

            $this->load->view('admin/header_main');
            $this->load->view('admin/Reports/Removed/coach',$data3);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

//functions to handle bookings

    public function spa_pending_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $result = $this->Bookings_model->spa_get_bookings('pending');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main');
            $this->load->view('admin/spa_bookings/pending_bookings',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function spa_current_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $result = $this->Bookings_model->spa_get_bookings('accepted');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main');
            $this->load->view('admin/spa_bookings/current_bookings',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function tennis_pending_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $result = $this->Bookings_model->tennis_get_bookings('pending');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main');
            $this->load->view('admin/tennis_bookings/pending_bookings',$data);
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }

    public function tennis_current_bookings(){
        if($this->session->userdata('user_type') == 'admin'){

            $result = $this->Bookings_model->tennis_get_bookings('accepted');
            $data['result'] = $result;
    
            $this->load->view('admin/header_main');
            $this->load->view('admin/tennis_bookings/current_bookings',$data);
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

    public function cancel_booking($bid, $table){
        //$bid = $this->input->post('bid');
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
            $this->Bookings_model->spa_delete_booking($bid);
            redirect('AdminDashboard/spa_current_bookings');
        }
        if($table === 'tennis'){
            $this->Bookings_model->tennis_delete_booking($bid);
            redirect('AdminDashboard/tennis_current_bookings');
        }
    }

    public function search(){
        if($this->session->userdata('user_type') == 'admin'){
            $this->load->view('admin/header_main');
            $this->load->view('admin/Search/search');
            $this->load->view('main/footer');
        }
        else{
            redirect('Main/login');
        }
    }


    public function fetchSearchRecords(){
        
        if($this->session->userdata('user_type') == 'admin'){

            
            $data["fetch_data"]= $this->AdminRegistrations->fetch_data_search();
            // print_r($data['fetch_data']);

            $this->load->view('admin/header_main');
            $this->load->view('admin/Search/searchResults',$data);
            $this->load->view('main/footer');
            
        }
        else{
            redirect('Main/login');
        }

    }

}