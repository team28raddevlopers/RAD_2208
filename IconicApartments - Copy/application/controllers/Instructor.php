<?php
    class Instructor extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'instructor'){
                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['notifications']=$notifications;
                $data['num'] = count($notifications);

                $this->load->view('instructor/header',$data);
                $this->load->view('instructor/home');
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){

                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['notifications']=$notifications;
                $data['num'] = count($notifications);

                $uid = $this->session->userdata('user_id');
                $instructor = $this->Gym_model->get_instructorid($uid); //find id of instructor from user id . better way??? 
                $iid = $instructor['instructor_id'];

                $result = $this->Gym_model->get_bookings_instructor($iid, 'pending');
                $data['result'] = $result;
        
                $this->load->view('instructor/header',$data);
                $this->load->view('instructor/pending_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function current_bookings(){
            if($this->session->userdata('user_type') == 'instructor'){

                $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
                $data['notifications']=$notifications;
                $data['num'] = count($notifications);

                $uid = $this->session->userdata('user_id');
                $instructor = $this->Gym_model->get_instructorid($uid); //find id of instructor from user id
                $iid = $instructor['instructor_id'];

                $result = $this->Gym_model->get_bookings_instructor($iid, 'accepted');
                $data['result'] = $result;
        
                $this->load->view('instructor/header',$data);
                $this->load->view('instructor/current_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function accept_booking($bid){
            
            //$bid = $this->input->post('bidaccept');
            $this->Gym_model->update_accept($bid);
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

            redirect('Instructor/current_bookings');
        }

        public function reject_booking($bid){
            $this->Gym_model->update_reject($bid);
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
            
            redirect('Instructor/pending_bookings');
        }

        public function cancel_booking($bid){
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
            $this->Gym_model->delete_booking($bid);
            redirect('Instructor/current_bookings'); //find way to load same page
        }
    }
?>