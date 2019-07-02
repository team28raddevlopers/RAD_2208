<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis extends CI_Controller {

	public function index(){
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('tennis/header');
			$this->load->view('tennis/tennis_home');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function booking(){
	$this->load->model('Tennis_model');
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
				$this->load->view('tennis/header');
				$this->load->view('tennis/book',$data);
				$this->load->view('main/footer');
			}
			else{

				$data = array(
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);

				$data['result'] = $this->Tennis_model->available_coaches($data);
				$data['info'] = $data;
				$data['available'] = true;

				$this->load->view('tennis/header');
				$this->load->view('tennis/book',$data);
				$this->load->view('main/footer');

			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function book(){
		$this->load->model('Tennis_model');
		if($this->session->userdata('user_type') == 'resident'){

			$data = array(
				'user_id' => $this->input->post('uid'),
				'coach_id' => $this->input->post('cid'),
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
			$this->Tennis_model->book_coach($data); //send data to Tennis_model


			redirect('Tennis/view'); //redirect to Tennis home page
		}
		else{
			redirect('Main/login');
		}
	}

	public function tennisCourt(){
		$this->load->model('Tennis_model');
		if($this->session->userdata('user_type') == 'resident'){
			// $result = $this->Tennis_model->get_residents();
			// $data['result'] = $result;

			$this->form_validation->set_rules('date', 'Date','Date', 'required');

			if ($this->form_validation->run() == FALSE){
				// $data['date'] = $this->session->userdata('date');
				// $data['user_id'] = $this->session->userdata('user_id');
				//$data['username'] = 'new user';
				$this->load->view('tennis/header');
				$this->load->view('tennis/tennisCourt');
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

				$this->Tennis_model->book_tennisCourt($data); //send data to Tennis_model

				redirect('Tennis/viewCourt'); //redirect to Tennis home page
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){

		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$this->load->model('Tennis_model');
			$result = $this->Tennis_model->get_bookings($uid);
			$data['result'] = $result;

			$this->load->view('tennis/header');
			$this->load->view('tennis/view',$data);
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
	}

	public function viewCourt(){

		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$this->load->model('Tennis_model');
			$result = $this->Tennis_model->get_courtbookings($uid);
			//$result = false;
			$data['result'] = $result;

			$this->load->view('tennis/header');
			$this->load->view('tennis/viewCourt',$data);
			$this->load->view('main/footer');

		}
		else{
			redirect('Main/login');
		}
	}



	public function cancel_coachbooking($bid){//pass a parameter 1-coach 2-court
			$this->load->model('Tennis_model');
			$this->Tennis_model->delete_coachbooking($bid);

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
			redirect('Tennis/view');

	}

	public function cancel_courtbooking($bid){//pass a parameter 1-coach 2-court
			$this->load->model('Tennis_model');
			$this->Tennis_model->delete_courtbooking($bid);

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

			redirect('Tennis/viewCourt');

	}

}
?>
