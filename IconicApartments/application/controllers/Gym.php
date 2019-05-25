<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {

	public function index()
	{
		//echo "Hello from index";
		$this->load->view('gym/header');
		$this->load->view('gym/gymHome');
	}

	public function book()
	{
		//echo "Hello from book";
		$this->load->model('Gym_model');
		$result = $this->Gym_model->getInstructors();

		//echo $result[0]['instructor_name'];
		$data['result'] = $result;

		$this->load->library('form_validation');
		$this->load->view('gym/header');
		$this->load->view('gym/book',$data);
	}

	public function attendance()
	{
		//echo "Hello from attendance";
		$this->load->library('form_validation');
		//$this->load->view('attendance');

		$this->form_validation->set_rules('uname', 'Username', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('gym/header');	
			$this->load->view('gym/attendance');
		}
		else
		{
			$this->load->view('gym/formsuccess');
		}
	}

	public function view()
	{
		//echo "Hello from view";
		$this->load->library('form_validation');
		$this->load->view('gym/header');
		$this->load->view('gym/view');
	}
}
?>