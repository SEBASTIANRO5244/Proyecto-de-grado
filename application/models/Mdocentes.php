<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdocentes extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardar($dato)
  	{
  		echo $this->db->insert("docente",$dato);	
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
      echo $query = $this->db->update("docente",$dato);
    }

     public function eliminar($id,$estado){
      $query = $this->db->query("update docente set estado='".$estado."'  where id=".$id);
    }

    public function actualizarPago($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update pago_docente set nombre_docente='".$nombre."',apellido_docente='".$apellidos."',numDoc_docente='".$identificacion."' where numDoc_docente =".$identificacion);
      return $query;
    }

  }