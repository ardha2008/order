<?php 


 class Produk_model extends CI_Model{
    
    
    function create($data){
        $query=$this->db->insert('produk',$data);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    function update($data,$id){
        $this->db->where('idproduk',$id);
        $query=$this->db->update('produk',$data);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    function destroy($id){
        $this->db->where('idproduk',$id);
        $query=$this->db->delete('produk');
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    function getAll(){
        $this->db->order_by('posting','DESC');
        $query=$this->db->get('produk');
        
        return $query->result();
    }
    
    function getOne($id){
        $query=$this->db->get_where('produk',array('idproduk'=>$id));
        
        foreach($query->result() as $result)
        
        return $result;
    }
    
    function getLast($count){
        $query=$this->db->order_by('posting','DESC')->get('produk',$count);
        return $query->result();
    }
 }

?>