<?php 
    
    class List_kerja extends CI_Controller{
        
        function index(){
            $this->load->model('Users_model');
            $idpegawai=$this->Users_model->getLogin('idpegawai');
            $query=$this->db->query("select * from list_kerja a, `order` b, produk c where a.status_kerja=0 and a.idorder=b.idorder and b.idproduk=c.idproduk and idpegawai='$idpegawai'");
            
            $data['data_antrian']=$query->result();
            
            $data['pages']='backend/list_kerja/index';
            $this->load->view('backend/layout',$data);
        }
        
        function riwayat(){
            $this->load->model('Users_model');
            $idpegawai=$this->Users_model->getLogin('idpegawai');
            
            $query=$this->db->query("select * from list_kerja a, `order` b, produk c where a.idorder=b.idorder and b.idproduk=c.idproduk and idpegawai='$idpegawai'  order by tanggal DESC");
            
            $data['data_riwayat']=$query->result();
            $data['pages']='backend/list_kerja/riwayat';
            $this->load->view('backend/layout',$data);  
                            
        }
        
        function finish($idorder=null){
            if($idorder==null) redirect('backend/list_kerja');
            
            $this->db->update('list_kerja',array('status_kerja'=>1),array('idorder'=>$idorder));
            $this->db->update('order',array('status'=>2),array('idorder'=>$idorder));
            
            redirect('backend/list_kerja');
        }
    }

?>