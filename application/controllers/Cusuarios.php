<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuarios extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Musuarios');
  	}

  	public function guardar()
  	{
  	$dato = array(
  					"nombre" => $_POST['nombres'],
  					"tipo_usuario" => $_POST['tipo'],
  					"usuario" => $_POST['users'],
            "password" => $_POST['pass']
  				);

  		echo $this->Musuarios->guardar($dato);
  	}

       public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array(
            "nombre" => $_POST['nombres'],
            "tipo_usuario" => $_POST['tipo'],
            "usuario" => $_POST['users'],
            "password" => $_POST['pass']
          );

      echo $this->Musuarios->actualizar($id,$dato);
    }

      public function tusuarios () {
   $dato['usuarios'] = $this->Musuarios->consultar("Select * from usuarios");
    $this->load->view('tablas/tusuarios', $dato);

 }

 public function eliminar()
    {
      # code...
       $id["id"] = $_POST['id'];
       echo $this->Musuarios->eliminar($id);

    }
}