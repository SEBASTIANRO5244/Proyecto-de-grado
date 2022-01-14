<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function  curso ()
 	{
 	$query = $this->db->get('curso');
 	return $query->result();
 	}

 		public function  pension ($fecha, $id)
 	{	
		$this->db->select('pension.id, pension.fecha, matricula.estado,
		matricula.nombre_estudiante, matricula.apellido_estudiante, matricula.nombre_acudiente, 
		matricula.apellido_acudiente, pension.periodo_academico, pension.mes_academico, 
		pension.fk_id_estudiante, pension.valor, pension.nombre_admin, 
		matricula.fk_numero_documento_acudiente');
		$this->db->from('pension');
		$this->db->join('matricula', 'pension.fk_id_estudiante = matricula.fk_numero_documento_estudiante');
		$this->db->where('pension.fecha', $fecha);
	    $this->db->where('pension.id', $id);
		$this->db->where('matricula.estado', "Matriculado");
		$query = $this->db->get();
	 	return $query->result();
 	}

 	 	public function  pago_Docente ($fecha, $id)
 	{	
		$this->db->select('*');
		$this->db->from('pago_docente');
		$this->db->join('docente', 'pago_docente.numDoc_docente = docente.numero_documento');
		$this->db->where('fecha', $fecha);
	    $this->db->where('pago_docente.id', $id);
		$query = $this->db->get();
	 	return $query->result();
 	}

 		public function  estudiante ()
 	{
    $sql = ("Select * from estudiante");
 	$query = $this->db->query($sql);
 	return $query->result();
 	}

 	 	public function  matricula ()
 	{
    $sql = ("Select * from matricula where estado='Matriculado'");
 	$query = $this->db->query($sql);
 	return $query->result();
 	}

}
