<?php 


class Frontend extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        
        $this->load->model('Produk_model');
        $data['sidebar']=$this->Produk_model->getLast(10);
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
        
        $this->email($data_customer['email'],$id_order);
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
    
    function cek(){
        
        if(!isset($_POST['cek']))redirect('');
        
        $this->load->model('Order_model');
        
        $id=$this->input->post('idorder');
        $query=$this->Order_model->check($id);
        
        if($query->num_rows()>0){
           $data['detail_order']=$query->result(); 
        }else{
            $data['detail_order']=false;
        }
        
        
        $data['pages']= 'frontend/cek';
        $this->load->view('frontend/layout',$data);
    }
    
    function email($email,$idorder){
        $this->load->library('email');
        
        $this->email->initialize(array(
          'protocol' => 'smtp',
          'smtp_host' => 'mail.ardha.web.id',
          'smtp_user' => 'herdianto@ardha.web.id',
          'smtp_pass' => 'ardhaherdianto',
          'smtp_port' => 465,
          'crlf' => "\r\n",
          'newline' => "\r\n"
        ));

        $this->email->from('billing@ardha.web.id', 'Billing Information');
        $this->email->to($email);
        
        $this->email->subject('Konfirmasi Pemesanan');
        $this->email->message("Kode pemesanan anda adalah $idorder");
        
        $this->email->send();
    }

}

?>