<?php
    class Masseur extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'masseur'){
                $this->load->view('masseur/header');
                $this->load->view('masseur/home');
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function pending_bookings(){
            if($this->session->userdata('user_type') == 'masseur'){

                $uid = $this->session->userdata('user_id');
                $this->load->model('Spa_model');
                $masseur = $this->Spa_model->get_masseurid($uid); //find id of masseur from user id . better way??? 
                $mid = $masseur['masseur_id'];

                $result = $this->Spa_model->get_bookings_masseur($mid, 'pending');
               // $result = false;
                $data['result'] = $result;
        
                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');

                $this->load->view('masseur/header');
                $this->load->view('masseur/pending_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function current_bookings(){
            if($this->session->userdata('user_type') == 'masseur'){

                $uid = $this->session->userdata('user_id');
                $this->load->model('Spa_model');
                $masseur = $this->Spa_model->get_masseurid($uid); //find id of masseur from user id
                $mid = $masseur['masseur_id'];

                $result = $this->Spa_model->get_bookings_masseur($mid, 'accepted');
               // $result = false;
                $data['result'] = $result;
        
                //$this->form_validation->set_rules('bid', 'Booking ID', 'required');
                $this->load->view('masseur/header');
                $this->load->view('masseur/current_bookings',$data);
                $this->load->view('main/footer');
            }
            else{
                redirect('Main/login');
            }
        }

        public function accept_booking($bid){
            
            $this->Spa_model->update_accept($bid);
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

            redirect('Masseur/current_bookings');
        }

        public function reject_booking($bid){
            $this->Spa_model->update_reject($bid);
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
            
            redirect('Masseur/pending_bookings');
        }

        public function cancel_booking($bid){
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
            $this->Spa_model->delete_booking($bid);
            redirect('Masseur/current_bookings'); 
        }
    }
?>