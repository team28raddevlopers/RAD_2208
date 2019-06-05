<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {

	public function index(){
		//echo "Hello from index";
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('gym/header');
			$this->load->view('gym/gymHome');
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		//echo "Hello from book";
		if($this->session->userdata('user_type') == 'resident'){
			$result = $this->Gym_model->get_instructors();
			//echo $result[0]['instructor_name'];
			$data['result'] = $result;

			$this->form_validation->set_rules('iid', 'Instructor ID', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('gym/header');
				$this->load->view('gym/book',$data);
			}
			else{
				$data = array(
					'user_id' => $this->input->post('uid'),
					'instructor_id' => $this->input->post('iid'),
					'book_date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
					'booking_status' => $this->input->post('status')
				);
		
				//echo $this->input->post('date');
				//$this->load->model('Gym_model');
				$this->Gym_model->book_instructor($data);
				//$this->load->view('gym/formsuccess');
				redirect('Gym/index');
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
				$this->load->view('gym/header');	
				$this->load->view('gym/attendance');
			}
			else{
				//$this->load->view('gym/formsuccess');
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){
		//echo "Hello from view";
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('gym/header');
			$this->load->view('gym/view');
		}
		else{
			redirect('Main/login');
		}
	}
		

	// public function bookInstructor(){

	// 	$data = array(
	// 		'user_id' => $this->input->post('uid'),
	// 		'instructor_id' => $this->input->post('iid'),
	// 		'book_date' => $this->input->post('date'),
	// 		'time_from' => $this->input->post('timefrom'),
	// 		'time_to' => $this->input->post('timeto'),
	// 		'booking_status' => $this->input->post('status')
	// 	);

	// 	//echo $this->input->post('date');
	// 	//$this->load->model('Gym_model');
	// 	$this->Gym_model->bookInstructor($data);
	// }
}
?>