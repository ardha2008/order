<?php 
    
    class Listkerja_model extends CI_Model{
        
        function queue($idproduk=null){
            $pegawai_low= $this->db->query("select idpegawai,count(*) as queue from list_kerja where status=0 group by idpegawai order by queue ASC limit 1");
            
            foreach($pegawai_low->result() as $result){
                
            }
            
            $data=array(
            'idpegawai' =>$result->idpegawai,
            'idproduk'  =>$idproduk,
            'status'    =>0
            );
            $this->db->insert('list_kerja',$data);
        }
    }

?>