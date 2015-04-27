<?php 

    class Order extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('Order_model');
        }
        
        function index(){
            if($this->input->get('id')){
                $id=$this->input->get('id');
                $data['data']=$this->Order_model->getOne($id);   
            }else{
                $data['data']=$this->Order_model->getAll(0);    
            }
            
            $data['pages']='backend/order/index';
            $this->load->view('backend/layout',$data);
        }
        
        function queue($idorder=null){
            if($idorder==null) redirect('backend/order');
            
            $this->load->model('Listkerja_model');
            $this->db->update('order',array('status'=>1),array('idorder'=>$idorder));
            
            $queue=$this->Listkerja_model->queue($idorder);
            if($queue==true){
                redirect("backend/order?id=$idorder");
            }            
        }
    }

?>