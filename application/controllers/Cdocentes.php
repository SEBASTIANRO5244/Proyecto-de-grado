<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdocentes extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdocentes');
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
            "contrato" => $_POST['contrato'],
            "valorContrato" => $_POST['valor'],
            "direccion" => $_POST['direccion'],
            "estado" => $_POST['estado']
  				);

  		echo $this->Mdocentes->guardar($dato);
  	}

    public  function val_id_doc()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mdocentes->val_id_doc($id);
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
            "contrato" => $_POST['contrato'],
            "valorContrato" => $_POST['valor'],
            "direccion" => $_POST['direccion']
          );

      echo $this->Mdocentes->actualizar($id,$dato);
    }

     public function eliminar()
    {
      # code...
       $id = $_POST['id'];
       $estado = $_POST['estado'];
       echo $this->Mdocentes->eliminar($id,$estado);

    }


     public function tdocente () {
   $dato['docente'] = $this->Mdocentes->consultar("Select * from docente where estado='Activo'");
    $this->load->view('tablas/tdocente', $dato);
  }

   public function actualizarPago(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];


  echo $this->Mdocentes->actualizarPago($nombre, $apellidos, $identificacion);
 }
}