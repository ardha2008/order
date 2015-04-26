<?php 

    class Users extends CI_Controller{
       
        function __construct(){
            parent::__construct();
            $this->load->model('Users_model');
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
    }


?>