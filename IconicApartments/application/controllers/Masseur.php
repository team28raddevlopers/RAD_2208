<?php
    class Masseur extends CI_Controller{
        public function index(){
            if($this->session->userdata('user_type') == 'masseur'){
                $this->load->view('masseur/header');
                $this->load->view('masseur/home');
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
            
            // $bid = $this->input->post('bidaccept');
            $this->load->model('Spa_model');
            $this->Spa_model->accept_booking($bid);
            // echo 'hello';
            redirect('Masseur/current_bookings');
        }

        public function cancel_booking($bid){
            // $bid = $this->input->post('bid');
            $this->load->model('Spa_model');
            $this->Spa_model->delete_booking($bid);
            redirect('Masseur/current_bookings'); //find way to load same page
        }
    }
?>