<?php

class Model_user extends CI_Model {
    
    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }
            
    function  ambil_data(){
        $user= $this->db->get('data_staff');
        return $user;
    }
    
}
