<?php 


class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        if($this->session->userdata('login')!=true) redirect('adminweb');
        
    }
    
    function index(){
        
        $this->load->model('Order_model');
               
        $data['jumlah_pesan']=$this->Order_model->countOrder();
        $data['jumlah_customer']=$this->Order_model->countCustomer();
        $data['total_untung']=$this->Order_model->sale();
        $data['jumlah_konfirmasi']=$this->Order_model->countKonfirmasi();
        
        $this->load->model('Listkerja_model');
        $data['selesai_dikerjakan']=$this->Listkerja_model->jumlah('1');
        $data['belum_dikerjakan']=$this->Listkerja_model->jumlah('0');
        
    
        $data['pages']='backend/dashboard/index';   
        $this->load->view('backend/layout',$data);    
    }
    
}