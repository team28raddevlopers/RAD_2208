<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spa extends CI_Controller {

	public function index(){
		
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('resident/resident_header');
			$this->load->view('spa/spa_home');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function booking(){
		
		if($this->session->userdata('user_type') == 'resident'){

			$data = array(
				'date' => '',
				'time_from' => '',
				'time_to' => '',
			);
			$data['info'] = $data;
			$data['available'] = false;

			$this->form_validation->set_rules('date', 'Date', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('resident/resident_header');
				$this->load->view('spa/book',$data);
				$this->load->view('main/footer');
			}
			else{
				
				$data = array(
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$data['result'] = $this->Spa_model->available_masseurs($data);
				$data['info'] = $data;
				$data['available'] = true;

				$this->load->view('resident/resident_header');
				$this->load->view('spa/book',$data);
				$this->load->view('main/footer');

			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		if($this->session->userdata('user_type') == 'resident'){
			
			$data = array(
				'user_id' => $this->input->post('uid'),
				'masseur_id' => $this->input->post('iid'),
				'date' => $this->input->post('date'),
				'time_from' => $this->input->post('timefrom'),
				'time_to' => $this->input->post('timeto'),
				'booking_status' => $this->input->post('status')
			);

			$notification = array(
                'title' => $this->input->post('title'),
                'from_id' => $this->session->userdata('user_id'),
                'to_id' => $this->input->post('iuid'),
                'message' => $this->input->post('message'),
                'type' => $this->input->post('type'),
				// 'booking_id' => $this->input->post('id')
				'visibility' => 1
			);
			
            $this->User_model->add_notification($notification);
			$this->Spa_model->book_masseur($data); //send data to Spa_model
			

			redirect('Spa/view'); //redirect to Spa home page
		}
		else{
			redirect('Main/login');
		}
	}

	public function spaRoom(){

		if($this->session->userdata('user_type') == 'resident'){
			// $result = $this->Spa_model->get_residents();
			// $data['result'] = $result;

			$this->form_validation->set_rules('date', 'Date', 'required');

			if ($this->form_validation->run() == FALSE){
				// $data['date'] = $this->session->userdata('date');
				// $data['user_id'] = $this->session->userdata('user_id');
				//$data['username'] = 'new user';
				$this->load->view('resident/resident_header');	
				$this->load->view('spa/spaRoom');
				$this->load->view('main/footer');

			}
			else{
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
					'booking_status' => $this->input->post('status')
				);

				$notification = array(
					'title' => $this->input->post('title'),
					'from_id' => $this->session->userdata('user_id'),
					'to_id' => $this->input->post('toid'),
					'type' => $this->input->post('type'),
					// 'booking_id' => $this->input->post('id')
					'visibility' => 1
				);
				
				$this->User_model->add_notification($notification);

				$this->Spa_model->book_spaRoom($data); //send data to Spa_model

				redirect('Spa/viewRoom'); //redirect to Spa home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){

		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$result = $this->Spa_model->get_bookings($uid);
			$data['result'] = $result;
	
			$this->load->view('resident/resident_header');
			$this->load->view('spa/view',$data);
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function viewRoom(){
		
		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$this->load->model('Spa_model');
			$result = $this->Spa_model->get_roombookings($uid);
			//$result = false;
			$data['result'] = $result;
	
			$this->load->view('resident/resident_header');
			$this->load->view('spa/viewRoom',$data);
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}



	public function cancel_booking($bid){
		$this->Spa_model->delete_booking($bid);
		$notification = array(
			'title' => $this->input->post('title'),
			'from_id' => $this->session->userdata('user_id'),
			'to_id' => $this->input->post('uid'),
			'message' => $this->input->post('message'),
			'type' => $this->input->post('type'),
			'booking_id' => $this->input->post('id'),
			'visibility' => 1
		);
		$this->User_model->add_notification($notification);
		redirect('Spa/view');
	}
		
}
?>