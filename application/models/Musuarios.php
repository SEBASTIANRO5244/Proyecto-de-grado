<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musuarios extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardar($dato)
  	{
  		echo $this->db->insert("usuarios",$dato);	
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

   public function buscarespecifico($id){
    $query = $this->db->query("select *
      from colegios
      where id_colegio =".$id);
    
    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }


    public function eliminar($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("usuarios");

    }


     public function actualizar($id,$dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("usuarios",$dato);
    }
  }

?>