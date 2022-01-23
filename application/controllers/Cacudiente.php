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
            "estado" => $_POST['estado'],
            "id_colegio" => $_POST['id_col']
  				);

  		echo $this->Macudiente->guardar($dato);
  	}

    public  function val_id_acu()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Macudiente->val_id_acu($id);
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
            "tipo_documento" => $_POST['tipo_identificacion'],
            "numero_documento" => $_POST['identificacion'],
            "profesion" => $_POST['Profesion'],
            "telefono" => $_POST['telefono'],
            "direccion" => $_POST['direccion']
          );

      echo $this->Macudiente->actualizar($id,$dato);
    }


     public function tacudiente () {
    $current_user = $this->session->all_userdata();
    $tip_user = $current_user['tipo_usu'];
    $id_colegio = $current_user['id_colegio'];


   $dato['acudiente'] = $this->Macudiente->consultar("Select * from acudiente where id_colegio =".$id_colegio);
    $this->load->view('tablas/tacudiente', $dato);

 }

public function actualizarMat(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];
  $id_acu_old = $_POST['id_acu_old'];

  echo $this->Macudiente->actualizarMat($nombre, $apellidos, $identificacion, $id_acu_old);
 }

}
