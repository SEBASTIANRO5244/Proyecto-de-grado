<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

      public function buscarespecifico($id_col){
        $query = $this->db->query("select * from colegios where id_colegio =".$id_col);
        
        if($query->num_rows()>0){
            return $query->row();
        }else{
            return false;
        }

    }
}