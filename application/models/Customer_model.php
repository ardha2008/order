<?php 


    class Customer_model extends CI_Model{
        
        function getAll(){
            $query=$this->db->order_by('nama')->get('customer');
            return $query->result();
        }
        
    }

?>