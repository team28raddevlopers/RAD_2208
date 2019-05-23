<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo "Hello from index";
		$this->load->helper('url');
		$this->load->view('gym/header');
		$this->load->view('gym/gymHome');
	}

	public function book()
	{
		//echo "Hello from book";
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->view('gym/header');
		$this->load->view('gym/book');
	}

	public function attendance()
	{
		//echo "Hello from attendance";
		$this->load->library('form_validation');
		$this->load->helper('url');
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
		$this->load->helper('url');
		$this->load->view('gym/header');
		$this->load->view('gym/view');
	}
}
