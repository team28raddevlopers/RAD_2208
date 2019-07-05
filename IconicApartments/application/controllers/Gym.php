<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {

	public function index(){
		// $notifications =$this->User_model->get_notifications($this->session->userdata('user_id'));
		// $data['username']=$this->session->userdata('username');
		// // $data['notifications']=$notifications;
		// $data['num'] = count($notifications);

		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('resident/resident_header');
			$this->load->view('gym/gym_home');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function booking(){

		if($this->session->userdata('user_type') == 'resident'){
			//$result = $this->Gym_model->get_instructors();
			//echo $result[0]['instructor_name'];
			//$data['result'] = $result;

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
				$this->load->view('gym/book',$data);
				$this->load->view('main/footer');
			}
			else{
				
				$data = array(
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$data['result'] = $this->Gym_model->available_instructors($data);
				$data['info'] = $data;
				$data['available'] = true;

				$this->load->view('resident/resident_header');
				$this->load->view('gym/book',$data);
				$this->load->view('main/footer');

			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		if($this->session->userdata('user_type') == 'resident'){
			//$result = $this->Gym_model->get_instructors();
			//echo $result[0]['instructor_name'];
			// $data['result'] = $result;
			// $data['available'] = false;

			$data = array(
				'user_id' => $this->input->post('uid'),
				'instructor_id' => $this->input->post('iid'),
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
			$this->Gym_model->book_instructor($data); //send data to Gym_model
			

			redirect('Gym/view'); //redirect to Gym home page
		}
		else{
			redirect('Main/login');
		}
	}

	
	public function attendance(){
		
		if($this->session->userdata('user_type') == 'resident'){
			$this->form_validation->set_rules('date', 'Date', 'required');

			if ($this->form_validation->run() == FALSE){
				// $data['username'] = $this->session->userdata('username');
				// $data['user_id'] = $this->session->userdata('user_id');
				$this->load->view('resident/resident_header');
				$this->load->view('gym/attendance');
				$this->load->view('main/footer');
			}
			else{
			
				//store data from form fields in associative array
				$data = array(
					// 'user_id' => $this->input->post('uid'),
					'user_id' => $this->session->userdata('user_id'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$this->Gym_model->mark_attendance($data); //send data to Gym_model
				redirect('Gym/attendance_view'); //redirect to Gym home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function attendance_view(){
		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$result = $this->Gym_model->get_attendence($uid);
			$data['result'] = $result;

			$this->load->view('resident/resident_header');
			$this->load->view('gym/attendance_view',$data);
			$this->load->view('main/footer');
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

			$this->load->view('resident/resident_header');
			$this->load->view('gym/view',$data);
			$this->load->view('main/footer');
	
		}
		else{
			redirect('Main/login');
		}
	}
	

	public function cancel_booking($bid){
		//$bid = $this->input->post('bid');
		$this->Gym_model->delete_booking($bid);
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
		redirect('Gym/view');
	}
}
?>