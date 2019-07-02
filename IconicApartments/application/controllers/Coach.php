<?php
    class Coach extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'coach'){
                $this->load->view('coach/header');
                $this->load->view('coach/home');
            }
            else{
                redirect('Main/login');
            }
        }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'coach'){

                $uid = $this->session->userdata('user_id');
                $this->load->model('Tennis_model');
                $coach = $this->Tennis_model->get_coachid($uid); //find id of coach from user id . better way???
                $cid = $coach['coach_id'];

                $result = $this->Tennis_model->get_bookings_coach($cid, 'pending');
               // $result = false;
                $data['result'] = $result;

                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');

                $this->load->view('coach/header');
                $this->load->view('coach/pending_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function current_bookings(){
            if($this->session->userdata('user_type') == 'coach'){

                $uid = $this->session->userdata('user_id');
                $this->load->model('Tennis_model');
                $coach = $this->Tennis_model->get_coachid($uid); //find id of coach from user id
                $cid = $coach['coach_id'];

                $result = $this->Tennis_model->get_bookings_coach($cid, 'accepted');
               // $result = false;
                $data['result'] = $result;

                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');
                $this->load->view('coach/header');
                $this->load->view('coach/current_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function accept_booking($bid){
            $this->load->model('Tennis_model');
            $this->Tennis_model->update_accept($bid);
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

            redirect('Coach/current_bookings');
        }

        public function reject_booking($bid){
            $this->load->model('Tennis_model');
            $this->Tennis_model->update_reject($bid);
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

            redirect('Coach/pending_bookings');
        }

        public function cancel_booking($bid){
          $this->load->model('Tennis_model');
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
            $this->Tennis_model->delete_coachbooking($bid);
            redirect('Coach/current_bookings');
        }
    }
?>
