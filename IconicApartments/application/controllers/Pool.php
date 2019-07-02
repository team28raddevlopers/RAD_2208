<?php 

class Pool extends CI_Controller{
 public function index(){
		if($this->session->userdata('user_type') == 'resident'){
			$this->load->view('pool/header');
			$this->load->view('pool/pool_home');
			$this->load->view('main/footer');
		}
		else{
			redirect('Main/login');
		}
    }
    public function attendance(){
		
		if($this->session->userdata('user_type') == 'resident'){
				$this->form_validation->set_rules('date', 'Date', 'required');
			
			//$this->form_validation->set_rules('uname', 'Username', 'required');

			if ($this->form_validation->run() == FALSE){
				$data['username'] = $this->session->userdata('username');
				$data['user_id'] = $this->session->userdata('user_id');
				$this->load->view('pool/header');	
				$this->load->view('pool/attendance',$data);
				$this->load->view('main/footer');
			}
			else{
			
				//store data from form fields in associative array
				$data = array(
					'user_id' => $this->input->post('uid'),
					// 'instructor_id' => $this->input->post('iid'),
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				);
				$this->load->model('pool_model');
				$this->pool_model->mark_attendance($data); //send data to pool_model
			
				redirect('Pool/index'); //redirect to Gym home page
				
			}
		}
		else{
			redirect('Main/login');
		}
	}

	public function view(){
		$this->load->model('pool_model');
	
		if($this->session->userdata('user_type') == 'resident'){
			$uid = $this->session->userdata('user_id');
			$result = $this->pool_model->get_attendence($uid);
			//echo $result[0]['instructor_name'];
			$data['result'] = $result;

			$this->form_validation->set_rules('uid', 'date', 'timefrom','timeto');

			if($this->form_validation->run() == FALSE){
				$this->load->view('pool/header');
				$this->load->view('pool/editform',$data);
				$this->load->view('main/footer');
			}
			else{
				
				$data = array(
					'user_id' => $this->input->post('uid'),
					
					'date' => $this->input->post('date'),
					'time_from' => $this->input->post('timefrom'),
					'time_to' => $this->input->post('timeto'),
				
				);

				$this->pool_model->book_instructor($data); 

				redirect('pool/view'); 
			}
		}
		else{
			redirect('Main/login');
		}
	}
	

	

	

}