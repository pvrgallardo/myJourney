<?php

    class Journey extends CI_Controller{

        // This load the default CodeIgniter's constructor
        public function __construct(){
            parent:: __construct();
        }

        // This load the views
        public function index(){
            $this->load->view('materializecss_header');
            $this->load->view('materializecss_frontend');
            $this->load->view('materializecss_footer');
        }
    }
?>