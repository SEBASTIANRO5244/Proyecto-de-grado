<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cestudiante extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mestudiante');
  	}

  	public function guardar()
  	{
  	$dato = array(
  			"nombre" => $_POST['nombres'],
  			"apellido" => $_POST['apellidos'],
  			"genero" => $_POST['genero'],
        "fecha_nacimiento" => $_POST['fecha_nac'],
        "lugar_nacimiento" => $_POST['lugar_nac'],
        "numero_documento" => $_POST['identificacion'],
        "tipo_documento" => $_POST['tipo_identificacion'],
  			"direccion" => $_POST['direccion'],
        "eps" => $_POST['eps'],
        "estado" => $_POST['estado'],
        "id_colegio" => $_POST['id_col']
  				);

  		echo $this->Mestudiante->guardar($dato);
  	}

    public  function val_id_est()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mestudiante->val_id_est($id);
        echo json_encode($respuesta);
    }

    
     public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array(
            "nombre" => $_POST['nombres'],
            "apellido" => $_POST['apellidos'],
            "genero" => $_POST['genero'],
            "fecha_nacimiento" => $_POST['fecha_nac'],
            "lugar_nacimiento" => $_POST['lugar_nac'],
            "numero_documento" => $_POST['identificacion'],
            "tipo_documento" => $_POST['tipo_identificacion'],
            "direccion" => $_POST['direccion'],
            "eps" => $_POST['eps']
          );

      echo $this->Mestudiante->actualizar($id,$dato);
    }


     public function testudiante () {
    $current_user = $this->session->all_userdata();
    $tip_user = $current_user['tipo_usu'];
    $id_colegio = $current_user['id_colegio'];

   $dato['estudiante'] = $this->Mestudiante->consultar("Select * from estudiante where id_colegio =".$id_colegio);
    $this->load->view('tablas/testudiante', $dato);

 }


 public function actualizarMat(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Mestudiante->actualizarMat($nombre, $apellidos, $identificacion);
 }
}