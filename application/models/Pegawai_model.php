<?php 


 class Pegawai_model extends CI_Model{
    
    function getAll(){
        $query=$this->db->get('pegawai');
        return $query->result();
    }
    
    function getOne($id){
        $query=$this->db->get_where('pegawai',array('idpegawai'=>$id));
        foreach($query->result() as $result) {
        
        }
        
        return $result;
    }
    
    function create($data){
        $query=$this->db->insert('pegawai',$data);
        
        if($query) return true;
    }
    
    function update($id,$data){
        $this->db->where('idpegawai',$id);
        $query=$this->db->update('pegawai',$data);
        
        if($query){
            return true;
        }
    }
    
    function destroy($id){
        
    }
    
 }

?>