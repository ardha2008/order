<?php 


class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        if($this->session->userdata('login')!=true) redirect('adminweb');
        
    }
    
    function index(){
        $data['pages']='backend/dashboard/index';   
        $this->load->view('backend/layout',$data);    
    }
    
}