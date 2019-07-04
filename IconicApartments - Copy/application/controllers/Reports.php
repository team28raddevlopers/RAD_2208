<?php

class Reports extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->library('pdf_library');
    }

    public function generate_pdf_report(){
        $this->load->view('admin/header_main');
        $this->load->view('admin/fotter');
        $this->load->view('admin/Report');
    }

}

?>