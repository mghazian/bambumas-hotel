<?php

Class C_client extends CI_Controller{
    function index(){
        $this->load->view('view_client');
    }
    
    function reserv(){
        $this->load->view('view_reservation');
    }
}
 ?>   
 