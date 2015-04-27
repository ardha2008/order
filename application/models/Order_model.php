<?php 


class Order_model extends CI_Model{
    
    function getAll($status=1){
        $query=$this->db->query("select * from `order` a , customer b, produk c where a.idcustomer=b.idcustomer and a.idproduk=c.idproduk order by tgl_order DESC");
        return $query->result();
    }
    
    function getOne($idorder){
        $query=$this->db->query("select * from `order` a , customer b, produk c where a.idorder='$idorder' and a.idcustomer=b.idcustomer and a.idproduk=c.idproduk order by tgl_order DESC");
        return $query->result();
    }
    
    function check($idorder){
        
    }
    
    function checkByCustomer($idcustomer){
        
    }
    
    function checkByProduksi($idproduksi){
        
    }
    
    function countOrder(){
        $query=$this->db->query("select count(*) as jumlah from `order`");
        $result=$query->result();
        return $result[0]->jumlah;
    }
    
    function countCustomer(){
        $query=$this->db->query("select count(*) as jumlah from customer");
        $result=$query->result();
        return $result[0]->jumlah;
    }
    
    function sale(){
        $query=$this->db->query("select sum(harga) as total from `order` a, produk b where a.idproduk=b.idproduk and status=1");
        $result=$query->result();
        return $result[0]->total;
    }
    
    function countKonfirmasi(){
        $query=$this->db->query("select count(*) as jumlah from konfirmasi where status=0");
        $result=$query->result();
        return $result[0]->jumlah;
    }
}