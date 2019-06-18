<?php

require_once dirname(__file__).'/tcpdf/tcpdf.php';  

class pdf_library extends TCPDF{

    public function __construct(){
        parent::__construct();
    }

    }

?>