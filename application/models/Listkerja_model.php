<?php 
    
    class Listkerja_model extends CI_Model{
        
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
        }
    }

?>