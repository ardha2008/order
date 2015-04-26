<?php 


class Frontend extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        
        $this->load->model('Produk_model');
    }
    
    function index(){
        $data['produk'] = $this->Produk_model->getLast(10);
        
        $data['pages']  = 'frontend/produk';
        $this->load->view('frontend/layout',$data);
    }
    
    function order($idproduk=null){
        if($idproduk==null)redirect('');
       
        $data['detail'] = $this->Produk_model->getOne($idproduk);
        $data['pages']  = 'frontend/order';
        $this->load->view('frontend/layout',$data);   
    }
    
    function konfirmasi_order($idproduk){
        if(!isset($_POST['order'])) redirect('');
        
        
    }
    
    function tes($id){
        $this->load->model('Listkerja_model');
        $this->Listkerja_model->queue($id);
    }
}

?>