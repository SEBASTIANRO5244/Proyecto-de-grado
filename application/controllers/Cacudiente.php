<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cacudiente extends CI_Controller {
	
  	public function __construct(){
      
        parent::__construct();
        $this->load->model('Macudiente');
  	}

  	public function guardar()
  	{
  	$dato = array(
  					"nombre" => $_POST['nombres'],
  					"apellido" => $_POST['apellidos'],
  					"genero" => $_POST['genero'],
            "tipo_documento" => $_POST['tipo_identificacion'],
            "numero_documento" => $_POST['identificacion'],
  					"profesion" => $_POST['Profesion'],
            "telefono" => $_POST['telefono'],
            "direccion" => $_POST['direccion'],
            "estado" => $_POST['estado']
  				);

  		echo $this->Macudiente->guardar($dato);
  	}

         public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array(
            "nombre" => $_POST['nombres'],
            "apellido" => $_POST['apellidos'],
            "genero" => $_POST['genero'],
            "tipo_documento" => $_POST['tipo_identificacion'],
            "numero_documento" => $_POST['identificacion'],
            "profesion" => $_POST['Profesion'],
            "telefono" => $_POST['telefono'],
            "direccion" => $_POST['direccion']
          );

      echo $this->Macudiente->actualizar($id,$dato);
    }


     public function tacudiente () {
   $dato['acudiente'] = $this->Macudiente->consultar("Select * from acudiente");
    $this->load->view('tablas/tacudiente', $dato);

 }

public function actualizarMat(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Macudiente->actualizarMat($nombre, $apellidos, $identificacion);
 }

}
