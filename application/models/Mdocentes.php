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

    public function val_id_doc($id){
      $tip_user = $this->session->all_userdata();
      $id_col = $tip_user['id_colegio'];
      $tip_user = $tip_user['tipo_usu'];
      $query = $this->db->query("select * from docente where numero_documento = $id and id_colegio = $id_col");
      
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
      echo $query = $this->db->update("docente",$dato);
    }

     public function eliminar($id,$estado){
      $query = $this->db->query("update docente set estado='".$estado."'  where id=".$id);
    }

    public function actualizarPago($identificacion, $id_pago_doc){
      $query = $this->db->query("update pago_docente set numDoc_docente='".$identificacion."' where numDoc_docente =".$id_pago_doc);
      return $query;
    }

  }