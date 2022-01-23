<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmatricula extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

      public function buscarespecifico($id){

       $tip_user = $this->session->all_userdata();
       $id_col = $tip_user['id_colegio'];
       $tip_user = $tip_user['tipo_usu'];

      $query = $this->db->query("select * from estudiante where numero_documento = $id and id_colegio= 
        $id_col");
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }

    }

    public function val_estado_est($id){
  		$query = $this->db->query("select * from estudiante where numero_documento = ".$id);
  		
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}

  	}

      public function buscarespecifico1($id){

        $tip_user = $this->session->all_userdata();
       $id_col = $tip_user['id_colegio'];
       $tip_user = $tip_user['tipo_usu'];

      $query = $this->db->query("select * from acudiente where numero_documento = $id and id_colegio= 
        $id_col");
      
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

      public function guardar($dato)
    {
      echo $this->db->insert("matricula",$dato);  
    }

    public function CargarCombo(){

      $query = $this->db->get('curso');
      $json = array();
        foreach ($query -> result() as $row) {
          $json [] = array(
            'id' => $row -> id,
            'nombre' => $row -> nombre
          );
        }

        echo json_encode($json);
    }


public function actualizar($fecha,$valor,$fk_numero_documento_estudiante,
    $nombre_estudiante,$apellido_estudiante,$fk_numero_documento_acudiente,$nombre_acudiente,
    $apellido_acudiente,$fk_id_curso)
    {
    $query = $this->db->query("update matricula set fecha='".$fecha."',valor=".$valor.",nombre_estudiante='".$nombre_estudiante."',apellido_estudiante='".$apellido_estudiante."',fk_numero_documento_estudiante ='".$fk_numero_documento_estudiante."', fk_numero_documento_acudiente=".$fk_numero_documento_acudiente.",nombre_acudiente='".$nombre_acudiente."',apellido_acudiente='".$apellido_acudiente."',fk_id_curso=".$fk_id_curso." "." where fk_numero_documento_estudiante =".$fk_numero_documento_estudiante);  
    return $query;    
   }    


   function cambiarestado($data){
    
    $this->db->where('numero_documento' , $data['numero_documento']);
    echo $this->db->update('estudiante',$data);

   }

   function cambiarestadoAcu($data){
    
    $this->db->where('numero_documento' , $data['numero_documento']);
    echo $this->db->update('acudiente',$data);

   }

function EliminarestadoEst($data){
    
    $this->db->where('numero_documento' , $data['numero_documento']);
    echo $this->db->update('estudiante',$data);

   }

   function EliminarestadoAcu($data){
    
    $this->db->where('numero_documento' , $data['numero_documento']);
    echo $this->db->update('acudiente',$data);

   }

   public function eliminar($fk_numero_documento_estudiante,$estado)
   {
    $query = $this->db->query("update matricula set estado='".$estado."'  where fk_numero_documento_estudiante=".$fk_numero_documento_estudiante);
   }

       public function actualizarEst($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update estudiante set nombre='".$nombre."',apellido='".$apellidos."', numero_documento='".$identificacion."' where numero_documento =".$identificacion);
      return $query;
    }

       public function actualizarAcu($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update acudiente set nombre='".$nombre."',apellido='".$apellidos."', numero_documento='".$identificacion."' where numero_documento =".$identificacion);
      return $query;
    }

    public function actualizarPago($nombre, $apellidos, $identificacion){
      $query = $this->db->query("update pension set nombre_estudiante='".$nombre."',apellido_estudiante='".$apellidos."' where fk_id_matricula =".$identificacion);
      return $query;
    }
}