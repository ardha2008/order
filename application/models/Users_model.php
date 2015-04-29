<?php 

    class Users_model extends CI_Model{
    
        
        function login($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            
            $query=$this->db->get('pegawai');
            
            if($query->num_rows()>0){
                foreach($query->result() as $result):
                endforeach;
                $this->session->set_userdata('isLogin',$result->idpegawai);
                $this->session->set_userdata('hak_akses',$result->hak_akses);
                $this->session->set_userdata('login',true);
                
                return true;
            }else{
                return false;
            }
        }
    
        function getLogin($show){
            $query=$this->db->get_where('pegawai',array('idpegawai'=>$this->session->userdata('isLogin')));
            foreach($query->result_array() as $result){
                
            }
            
            return $result[$show];
        }
    }

?>