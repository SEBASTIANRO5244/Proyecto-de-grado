<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcolegios extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardar($dato)
  	{
  		echo $this->db->insert("colegios",$dato);	
  	}

 public function Validar_Dane($id){
      $query = $this->db->query("select * from colegios where dane_colegio = ".$id);
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }
  
    }

  	 public function consultar($sql)
   {
       $query = $this->db->query($sql);
         if($query->num_rows()>0){
       return $query;
     }else{
       return false;
     }
   }
   
   public function actualizar($id,$dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("colegios",$dato);
    }

 
 
  }

  ?>