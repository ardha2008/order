<?php 

class Generate extends CI_Controller{
    
    function customer($jumlah=null){
        if($jumlah==null)die('tentukan jumlah record generate, customer/[jumlah]');
        
        for($i=1;$i<=$jumlah;$i++){
                $this->load->helper('string');
                $data=array(
                'idcustomer'=>"customer$i",
                'nama'=>"customer $i",
                );
                $this->db->insert('customer',$data);
        }
    }
    
    function produk($jumlah=null){
        if($jumlah==null)die('tentukan jumlah record generate, order/[jumlah]');
        
        for($i=1;$i<=$jumlah;$i++){
            
            $this->load->helper('string');
            
            $data=array(
            'idproduk'=>"produk$i",
            'nama'=>"produk $i",
            'estimasi'=>rand(1,6),
            'harga'=>rand(100,900).'00'
            );
            
            $this->db->insert('produk',$data);
        }
    }
    
    function order($jumlah=null){
        if($jumlah==null)die('tentukan jumlah record generate, order/[jumlah]');
        
        
        for($i=1;$i<=$jumlah;$i++){
            $this->load->helper('string');
            $idorder=random_string('unique',5);
            
            $query=$this->db->query("SELECT * FROM produk ORDER BY RAND() LIMIT 1");
            $query=$query->result();
            $idproduk=$query[0]->idproduk;
            
            $query=$this->db->query("SELECT * FROM customer ORDER BY RAND() LIMIT 1");
            $query=$query->result();
            $idcustomer=$query[0]->idcustomer;
            
            $data=array(
            'idorder'=>random_string('numeric',5),
            'idproduk'=>$idproduk,
            'idcustomer'=>$idcustomer,
            'status'=>rand(0,1)
            );
            
            $this->db->insert('order',$data);   
        }
    }
    
    function queue($idproduk=null){
            
            $pegawai_queue=$this->db->query("select idpegawai from pegawai where hak_akses=0 and idpegawai not in (select idpegawai from list_kerja) limit 1");
            
            if($pegawai_queue->num_rows()>0){
               $pegawai_queue=$pegawai_queue->result();
               $pegawai_queue=$pegawai_queue[0]->idpegawai;
               $idpegawai=$pegawai_queue;                        
            }else{
                $pegawai_low= $this->db->query("select idpegawai,count(*) as queue from list_kerja where status=0 group by idpegawai order by queue ASC limit 1");
                foreach($pegawai_low->result() as $result){
                    
                }
                $idpegawai=$result->idpegawai;    
            }            
            
            $data=array(
            'idpegawai' =>$idpegawai,
            'idproduk'  =>$idproduk,
            'status'    =>0
            );
            $this->db->insert('list_kerja',$data);
            
            return true;
    }
    
    function list_kerja(){
        $query=$this->db->query("select idproduk from produk where idproduk in (select idproduk from `order` where status=1)");
        
        foreach($query->result() as $result){
            $this->queue($result->idproduk);        
        }
    }
}


?>