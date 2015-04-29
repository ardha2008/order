<?php 

    class Customer extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('Customer_model');
        }
        
        function index(){
            $data['data_customer']=$this->Customer_model->getAll();
            
            $data['pages']='backend/customer/index';
            $this->load->view('backend/layout',$data);
        }
        
        function read(){
            
        }
    
        
    }

?>