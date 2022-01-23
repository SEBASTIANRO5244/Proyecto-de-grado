<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpago_docente extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

    public function guardar($dato)
    {
      echo $this->db->insert("pago_docente",$dato);  
    }

  	public function buscarespecifico($id){
      $tip_user = $this->session->all_userdata();
      $id_col = $tip_user['id_colegio'];
      $tip_user = $tip_user['tipo_usu'];
  		$query = $this->db->query("select * from docente where estado='activo' and numero_documento = $id");
  		
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}

  	}

     public function actualizar($id,$dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("pago_docente",$dato);
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

    public function actualizarDoc($nombre, $apellidos, $identificacion, $id_documen){
      $query = $this->db->query("update docente set numero_documento='".$identificacion."',nombre='".$nombre."',apellido='".$apellidos."' where numero_documento =".$id_documen);
      return $query;
    }
}