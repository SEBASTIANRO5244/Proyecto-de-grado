<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpago_estudiante extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mpago_estudiante');
  	}

 public  function buscarespecifico()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mpago_estudiante->buscarespecifico($id);
        echo json_encode($respuesta);
    }

     public function guardar()
    {
    $dato = array(
            "fecha" => $_POST['fecha'],
            "valor" => $_POST['valor'],
            "nombre_admin" => $_POST['admin'],
            "fk_id_matricula" => $_POST['id'],
            "periodo_academico" => $_POST['periodo_academico'],
            "mes_academico" => $_POST['mes_academico']
          );

      echo $this->Mpago_estudiante->guardar($dato);
    }

             public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array(
           "fecha" => $_POST['fecha'],
            "valor" => $_POST['valor'],
            "nombre_admin" => $_POST['admin'],
            "fk_id_matricula" => $_POST['doc_estudiante'],
            "periodo_academico" => $_POST['periodo_academico'],
            "mes_academico" => $_POST['mes_academico']
          );

      echo $this->Mpago_estudiante->actualizar($id,$dato);
    }

 
   public function tpago_est () {
   $dato['pension'] = $this->Mpago_estudiante->consultar("select pension.id, pension.fecha, 
    matricula.nombre_estudiante, matricula.apellido_estudiante, matricula.nombre_acudiente, 
    matricula.apellido_acudiente, pension.periodo_academico, pension.mes_academico, 
    pension.fk_id_matricula, pension.valor, pension.nombre_admin, 
    matricula.fk_numero_documento_acudiente
    from pension 
    inner join matricula 
    on pension.fk_id_matricula = matricula.fk_numero_documento_estudiante");
    $this->load->view('tablas/tpago_est', $dato);

 }

 public function actualizarMat(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];
  $nombre1 = $_POST['nombres1'];
  $apellidos1 = $_POST['apellidos1'];

  echo $this->Mpago_estudiante->actualizarMat($nombre, $apellidos, $identificacion, $nombre1, $apellidos1);
 }

 public function actualizarEst(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Mpago_estudiante->actualizarEst($nombre, $apellidos, $identificacion);
 }
 
 public function actualizarAcu(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Mpago_estudiante->actualizarAcu($nombre, $apellidos, $identificacion);
 }
}


