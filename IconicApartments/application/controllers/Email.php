<?php

class Email extends CI_Controller{

    public function index(){

        
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.googlemail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'radteam28@gmail.com';
        $config['smtp_pass']    = 'team28rad2017cs';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = FALSE;

        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from('radteam28@gmail.com', 'admin ');
        $this->email->to('udulaindunil@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing email send');
        $this->email->set_newline("\r\n");

        $result = $this->email->send();
        var_dump($this->email->print_debugger());
    }


}