<?php 

    class Users extends CI_Controller{
       
        function __construct(){
            parent::__construct();
            $this->load->model('Users_model');
        }
        
        function index(){
            $this->load->model('Pegawai_model');
            $data['data_users']=$this->Pegawai_model->getAll();
            $data['pages']='backend/users/index';
            $this->load->view('backend/layout',$data);
        }        
        
        function login(){
            $data['error']='';
            if(isset($_POST['login'])){
                $username   =$this->input->post('username');
                $password   =$this->input->post('password');
                $login=$this->Users_model->login($username,$password);
                
                if($login==true){
                    redirect('backend/dashboard');
                }else{
                    $data['error']=true;
                }
            }
            
                $this->load->view('backend/login',$data);
        }
        
        function logout(){
            $this->session->sess_destroy();
            redirect('adminweb');
        }
        
        function reset($idusers){
            
            if($this->session->userdata('hak_akses') <2 ) redirect('backend/dashboard');
            
            $this->load->model('Pegawai_model');
            $idpegawai=$this->Pegawai_model->getOne($idusers);
            
            $this->db->update('pegawai',array('password'=>'1234'),array('idpegawai'=>$idusers));
            $this->session->set_tempdata('success',true,4);
            
            redirect('backend/users');
        }
    }


?>