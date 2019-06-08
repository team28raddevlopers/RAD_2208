<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {

	public function index(){
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('gym/header');
			$this->load->view('gym/gymHome');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		if($this->session->userdata('user_type') == 'resident'){
			$result = $this->Gym_model->get_instructors();
			//echo $result[0]['instructor_name'];
			$data['result'] = $result;

			$this->form_validation->set_rules('iid', 'Instructor ID', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('gym/header');
				$this->load->view('gym/book',$data);
				$this->load->view('main/footer');
			}
			else{
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					'instructor_id' => $this->input->post('iid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
					'booking_status' => $this->input->post('status')
				);

				$this->Gym_model->book_instructor($data); //send data to Gym_model

				redirect('Gym/view'); //redirect to Gym home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function attendance(){
		
		if($this->session->userdata('user_type') == 'resident'){
			$this->form_validation->set_rules('uname', 'Username', 'required');

			if ($this->form_validation->run() == FALSE){
				$data['username'] = $this->session->userdata('username');
				$data['user_id'] = $this->session->userdata('user_id');
				$this->load->view('gym/header');	
				$this->load->view('gym/attendance',$data);
				$this->load->view('main/footer');
			}
			else{
			
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					'instructor_id' => $this->input->post('iid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$this->Gym_model->mark_attendance($data); //send data to Gym_model
				redirect('Gym/index'); //redirect to Gym home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){
		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$result = $this->Gym_model->get_bookings($uid);
			$data['result'] = $result;
	
			$this->form_validation->set_rules('bid', 'Booking ID', 'required');
	
			if($this->form_validation->run() == FALSE){
				$this->load->view('gym/header');
				$this->load->view('gym/view',$data);
				$this->load->view('main/footer');
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function cancel_booking(){
		$bid = $this->input->post('bid');
		$this->Gym_model->delete_booking($bid);
		redirect('Gym/view');
	}
}
?>