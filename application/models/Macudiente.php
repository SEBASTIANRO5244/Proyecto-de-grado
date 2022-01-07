<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Macudiente extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardar($dato)
  	{
  		echo $this->db->insert("acudiente",$dato);	
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
      echo $query = $this->db->update("acudiente",$dato);
    }


     public function actualizarMat($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update Matricula set nombre_acudiente='".$nombre."',apellido_acudiente='".$apellidos."' where fk_numero_documento_acudiente =".$identificacion);
      return $query;
    }
  }

  ?>