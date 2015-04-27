<?php 

    class Konfirmasi extends CI_Controller{
        
        function index(){
            $get_data=$this->db->order_by('tanggal','DESC')->get('konfirmasi');
            $data['data_konfirmasi'] = $get_data->result();
            
            $data['pages']  = 'backend/konfirmasi/index';
            $this->load->view('backend/layout',$data);
        }
        
        function update($id){
            
        }
    }