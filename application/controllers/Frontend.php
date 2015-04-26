<?php 


class Frontend extends CI_Controller{
    
    function index(){
        echo 'Ini halaman depan';
    }
    
    function read($idproduk=null){
        if($idproduk==null)redirect('');
        
        echo "Ini halaman detail dari $idproduk";   
    }
}

?>