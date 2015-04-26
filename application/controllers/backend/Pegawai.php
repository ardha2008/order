<?php 
 
 
 class Pegawai extends CI_Controller{
    
    function __construct(){
        parent::__construct(); 
        if($this->session->userdata('login')!=true) redirect('adminweb');
        
        $this->load->model('Pegawai_model');
    }
    
    
    function index(){
        $data['getall'] = $this->Pegawai_model->getAll();
        $data['pages']  = 'backend/pegawai/index';
        $this->load->view('backend/layout',$data);
    }
    
    function create(){
        $data['pages']  = 'backend/pegawai/create';
        $this->load->view('backend/layout',$data);
    }
    
    function store(){
        if(!isset($_POST['submit']))redirect('backend/pegawai');
        
        $this->load->helper('string');
        
        $data=array(
        'idpegawai'=>random_string('numeric',4),
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'email'=>$this->input->post('email'),
        'nama'=>$this->input->post('nama'),
        'hak_akses'=>$this->input->post('hak_akses'),
        );
        
        $create=$this->Pegawai_model->create($data);
        if($create){
            $this->session->set_tempdata('success',true,4);
            redirect('backend/pegawai/create');
        }
    }
    
    function edit($id){
        $data['pages']  = 'backend/pegawai/edit';
        $data['getdata']= $this->Pegawai_model->getOne($id);
        $this->load->view('backend/layout',$data);
    }
    
    function update($id){
        $data=array(
        'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'nama'=>$this->input->post('nama'),
        'hak_akses'=>$this->input->post('hak_akses'),
        );
        
        $query=$this->Pegawai_model->update($id,$data);
        
        if($query){
            $this->session->set_tempdata('success',true,3);
            redirect('backend/pegawai/edit/'.$id);
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('adminweb');
    }
 }

?>