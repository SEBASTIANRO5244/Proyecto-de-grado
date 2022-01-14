<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpago_estudiante extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

     public function guardar($dato)
    {
      echo $this->db->insert("pension",$dato);  
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
      echo $query = $this->db->update("pension",$dato);
    }

  	public function buscarespecifico($id){
  		$query = $this->db->query("select matricula.fecha, matricula.valor,
        matricula.fk_numero_documento_estudiante, matricula.nombre_estudiante,
        matricula.apellido_estudiante, matricula.fk_numero_documento_acudiente,
        matricula.nombre_acudiente, matricula.apellido_acudiente, matricula.fk_id_curso,
        estudiante.estado from matricula inner join estudiante on
        matricula.fk_numero_documento_estudiante = estudiante.numero_documento
        where matricula.fk_numero_documento_estudiante =".$id);
  		
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}

  	}

    public function obtener_id_matricula($id){
  		$query = $this->db->query("select * from matricula
        where matricula.estado = 'Matriculado' and
        matricula.fk_numero_documento_estudiante =".$id);
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}

  	}

    public function actualizarMat($nombre, $apellidos, $identificacion,$nombre1, $apellidos1){
      $query = $this->db->query("update matricula set nombre_estudiante='".$nombre."',apellido_estudiante='".$apellidos."',nombre_acudiente='".$nombre1."',apellido_acudiente='".$apellidos1."' where fk_numero_documento_estudiante =".$identificacion);
      return $query;
    }

      public function actualizarEst($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update estudiante set nombre='".$nombre."',apellido='".$apellidos."' where numero_documento=".$identificacion);
      return $query;
    }

    public function actualizarAcu($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update acudiente set nombre='".$nombre."',apellido='".$apellidos."', numero_documento='".$identificacion."' where numero_documento =".$identificacion);
      return $query;
    }

     
}