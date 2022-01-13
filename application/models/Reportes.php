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

 		public function  pension ($fecha, $matricula)
 	{	
		$this->db->select('*');
		$this->db->from('pension');
		$this->db->join('matricula', 'pension.fk_id_matricula = matricula.fk_numero_documento_estudiante');
		$this->db->where('pension.fecha', $fecha);
	    $this->db->where('fk_id_matricula', $matricula); 
		$query = $this->db->get();
	 	return $query->result();
 	}

 	 	public function  pago_Docente ($fecha, $documento)
 	{	
		$this->db->select('*');
		$this->db->from('pago_docente');
		$this->db->join('docente', 'pago_docente.numDoc_docente = docente.numero_documento');
		$this->db->where('fecha', $fecha);
	    $this->db->where('numDoc_docente', $documento);
		$query = $this->db->get();
	 	return $query->result();
 	}

 		public function  estudiante ()
 	{
    $sql = ("Select * from estudiante where estado='Inactivo'");
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
