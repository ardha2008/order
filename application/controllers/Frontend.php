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
    
    function konfirmasi_order(){
        if(!isset($_POST['order'])) redirect('');
        
        $this->load->helper('string');
        $random_idcustomer=random_string('numeric',7);
        
        $data_order=array(
        'idproduk'  =>$this->input->post('idproduk'),
        'idcustomer'=>$random_idcustomer,
        'nama'      =>$this->input->post('nama'),
        'telp'      =>$this->input->post('telp'),
        'email'     =>$this->input->post('email'),
        'alamat'    =>$this->input->post('alamat')
        );
        
        
        $this->session->set_userdata('order',$data_order);
        
        $data['produk']=$this->Produk_model->getOne($this->input->post('idproduk'));
        $data['data']=$this->session->userdata('order');
        $data['pages']='frontend/konfirmasi';  
        $this->load->view('frontend/layout',$data);
    }
    
    function complete(){
        if(!isset($_POST['konfirmasi'])) redirect('');
        
        $data_finish=$this->session->userdata('order');
        
        $data_customer=array(
        'idcustomer'=>$data_finish['idcustomer'],
        'nama'=>$data_finish['nama'],
        'alamat'=>$data_finish['alamat'],
        'email'=>$data_finish['email'],
        'telp'=>$data_finish['telp'],
        );
        
        $this->db->insert('customer',$data_customer);
        
        $this->load->helper('string');
        $id_order=random_string('numeric',5);
        
        $data_order=array(
        'idorder'=>$id_order,
        'idcustomer'=>$data_finish['idcustomer'],
        'idproduk'=>$data_finish['idproduk'],
        );
        
        $this->db->insert('order',$data_order);
        
        $data['idorder']=$id_order;
        $data['pages']='frontend/complete';
        
        $this->load->view('frontend/layout',$data);
    }
    
    function pembayaran(){

        if(isset($_POST['konfirmasi'])){
            $konfirmasi=array(
            'idorder'=>$this->input->post('idorder'),
            'nama'=>$this->input->post('nama'),
            'nominal'=>$this->input->post('nominal'),
            'tujuan'=>$this->input->post('tujuan'),
            );
            
            $this->db->insert('konfirmasi',$konfirmasi);
            $this->session->set_tempdata('success',true,4);
        }
        
        $data['rekening']=array(
        'BCA - 123456789 a.n Ibad Almuklas',
        'Mandiri - 123456789 a.n Nursokeh'
        );
        
        $data['pages'] = 'frontend/pembayaran';
        $this->load->view('frontend/layout',$data);
    }
    

}

?>