<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function  curso ()
 	{
		$current_user = $this->session->all_userdata();
		$tip_user = $current_user['tipo_usu'];
		$id_colegio = $current_user['id_colegio'];
		
		$this->db->select('*');
		$this->db->from('curso');
		$this->db->where('id_colegio', $id_colegio);

 		$query = $this->db->get();
 		return $query->result();
 	}

 		public function  pension ($fecha, $id)
 	{	
		$this->db->select(' matricula.id, pension.id, pension.fecha, matricula.estado,
		matricula.nombre_estudiante, matricula.apellido_estudiante, matricula.nombre_acudiente, 
		matricula.apellido_acudiente, pension.periodo_academico, pension.mes_academico, 
		pension.fk_id_estudiante, pension.valor, pension.nombre_admin, pension.fk_id_matricula,
		matricula.fk_numero_documento_acudiente');
		$this->db->from('pension');
		$this->db->join('matricula', 'pension.fk_id_matricula = matricula.id');
		$this->db->where('pension.id', $id);
		$query = $this->db->get();
	 	return $query->result();
 	}

 	 	public function  pago_Docente ($fecha, $id)
 	{	
		$tip_user = $this->session->all_userdata();
		$id_col = $tip_user['id_colegio'];
		$tip_user = $tip_user['tipo_usu'];

		$this->db->select('*');
		$this->db->from('pago_docente');
		$this->db->join('docente', 'pago_docente.numDoc_docente = docente.numero_documento');
		$this->db->where('fecha', $fecha);
	    $this->db->where('pago_docente.id', $id);
		$this->db->where('pago_docente.id_colegio', $id_col);
		$query = $this->db->get();
	 	return $query->result();
 	}

 		public function  estudiante ()

 	{

 		$current_user = $this->session->all_userdata();
		$tip_user = $current_user['tipo_usu'];
		$id_colegio = $current_user['id_colegio'];


		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('id_colegio', $id_colegio);

        
 	    $query = $this->db->get();
 	    return $query->result();
 	}

 	 	public function  matricula ()
 	{

 		$current_user = $this->session->all_userdata();
		$tip_user = $current_user['tipo_usu'];
		$id_colegio = $current_user['id_colegio'];

        $this->db->select('*');
		$this->db->from('matricula');
		$this->db->where('estado="Matriculado"');
		$this->db->where('id_colegio', $id_colegio);

        
 	    $query = $this->db->get();
 	    return $query->result();
 	}

}
