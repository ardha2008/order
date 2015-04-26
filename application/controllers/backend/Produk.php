<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        if($this->session->userdata('login')!=true) redirect('adminweb');
        
        $this->load->model('Produk_model');
        $this->load->helpers('string');
    }
    
    public function index(){
        $data['getall'] = $this->Produk_model->getAll();
        $data['pages']  ='backend/produk/index';
        $this->load->view('backend/layout',$data);
    }
    
    function create(){
        $data['last']=$this->Produk_model->getLast(5);
        
        $data['pages']='backend/produk/create';
        $this->load->view('backend/layout',$data);
    }
    
    function store(){        
     //   if(isset($_POST['userfile'])){
            $config['upload_path']          = './assets/produk/';
            $config['allowed_types']        = 'gif|jpg|png|';
            $config['file_name']            = 'produk';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
    
            $this->load->library('upload', $config);
            
            if($this->upload->do_upload('userfile')){
                 $filename=$this->upload->data('file_name');
            
            }else{
                exit($this->session->set_tempdata('error',$this->upload->display_errors('<p>', '</p>'),4));
            }
       // }else{
       //         $filename=null;
       // }
        
        $data=array(
        'idproduk'  =>random_string('alpha',6),
        'nama'      =>$this->input->post('nama'),
        'deskripsi' =>$this->input->post('deskripsi'),
        'image'     =>$filename,
        'estimasi'  =>$this->input->post('estimasi'),
        'harga'     =>$this->input->post('harga')
        );
        
        $create=$this->Produk_model->create($data);
        
        if($create==true){
                $this->session->set_tempdata('success',true,5);
                redirect('backend/produk/create');        
        }
    
    }
    
    function read($id){
        
    }
    
    function edit($id){
        $data['getdata']=$this->Produk_model->getOne($id);
        $data['pages']  ='backend/produk/edit';
        $this->load->view('backend/layout',$data);
    }
    
    function update($id){
        if(!isset($_POST['submit']))redirect('backend/produk');
       
        $data=array(
        'nama'      =>$this->input->post('nama'),
        'deskripsi' =>$this->input->post('deskripsi'),
        //'image'     =>null,
        'estimasi'  =>$this->input->post('estimasi'),
        'harga'     =>$this->input->post('harga')
        );
        

        $update=$this->Produk_model->update($data,$id);
        
        if($update){
            $this->session->set_tempdata('success',true,4);
            redirect('backend/produk/edit/'.$id);
        }
    }
    
    function delete($id){
        $delete=$this->Produk_model->destroy($id);
        
        if($delete){
            $this->session->set_tempdata('success',true,4);
            redirect('backend/produk');
        }
    }
    
    
    
    function generate(){
        for($i=1;$i<=500;$i++){
            $data=array(
            'idproduk'  =>random_string('alnum',8),
            'nama'      =>random_string('alpha',8),
            'deskripsi' =>null,
            'image'     =>null,
            'estimasi'  =>rand(2,14),
            'harga'     =>rand(20,90).'500'
            );
            
            $this->db->insert('produk',$data);
        }
    }
    
}

?>