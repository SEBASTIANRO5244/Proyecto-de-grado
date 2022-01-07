<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mestudiante extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardar($dato)
  	{
  		echo $this->db->insert("estudiante",$dato);	
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
      echo $query = $this->db->update("estudiante",$dato);
    }

    public function actualizarMat($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update Matricula set nombre_estudiante='".$nombre."',apellido_estudiante='".$apellidos."' where fk_numero_documento_estudiante =".$identificacion);
      return $query;
    }
  
  }

  ?>