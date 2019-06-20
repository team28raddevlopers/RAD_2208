<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spa extends CI_Controller {

	public function index(){
		//echo "Hello from index";
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('spa/header');
			$this->load->view('spa/spaHome');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		//echo "Hello from book";
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->model('Spa_model');
			$result = $this->Spa_model->get_masseurs();
			//echo $result[0]['instructor_name'];
			$data['result'] = $result;

			$this->form_validation->set_rules('mid', 'Masseur ID', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('spa/header');
				$this->load->view('spa/book',$data);
				$this->load->view('main/footer');
			}
			else{
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					'instructor_id' => $this->input->post('mid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
					'booking_status' => $this->input->post('status')
				);
		
				//echo $this->input->post('date');
				//$this->load->model('Spa_model');

				$this->Spa_model->book_masseur($data); //send data to Spa_model

				//$this->load->view('spa/formsuccess');

				redirect('Spa/view'); //redirect to Spa home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function attendance(){
		//echo "Hello from attendance";
		
		if($this->session->userdata('user_type') == 'resident'){
			$this->form_validation->set_rules('uname', 'Username', 'required');

			if ($this->form_validation->run() == FALSE){
				$data['username'] = $this->session->userdata('username');
				$data['user_id'] = $this->session->userdata('user_id');
				//$data['username'] = 'new user';
				$this->load->view('spa/header');	
				$this->load->view('spa/attendance',$data);
				$this->load->view('main/footer');
			}
			else{
			
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					'masseur_id' => $this->input->post('mid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$this->Spa_model->mark_attendance($data); //send data to Spa_model
				redirect('Spa/index'); //redirect to Spa home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){
		//echo "Hello from view";
		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$this->load->model('Spa_model');
			$result = $this->Spa_model->get_bookings($uid);
			//$result = false;
			$data['result'] = $result;
	
			$this->form_validation->set_rules('bid', 'Booking ID', 'required');
	
			if($this->form_validation->run() == FALSE){
				$this->load->view('spa/header');
				$this->load->view('spa/view',$data);
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function cancel_booking(){
		$bid = $this->input->post('bid');
		$this->Spa_model->delete_booking($bid);
		redirect('Spa/view');
	}
		
}
?>