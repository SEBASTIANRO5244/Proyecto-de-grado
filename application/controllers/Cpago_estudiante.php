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
            "nombre_estudiante" => $_POST['nombres'],
            "apellido_estudiante" => $_POST['apellidos'],
            "nombre_acudiente" => $_POST['nombres1'],
            "apellido_acudiente" => $_POST['apellidos1'],
            "nombre_admin" => $_POST['admin'],
            "fk_id_matricula" => $_POST['doc_estudiante'],
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
            "nombre_estudiante" => $_POST['nombres'],
            "apellido_estudiante" => $_POST['apellidos'],
            "nombre_acudiente" => $_POST['nombres1'],
            "apellido_acudiente" => $_POST['apellidos1'],
            "nombre_admin" => $_POST['admin'],
            "fk_id_matricula" => $_POST['doc_estudiante'],
            "periodo_academico" => $_POST['periodo_academico'],
            "mes_academico" => $_POST['mes_academico']
          );

      echo $this->Mpago_estudiante->actualizar($id,$dato);
    }

 
   public function tpago_est () {
   $dato['pension'] = $this->Mpago_estudiante->consultar("Select * from pension");
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
 
}