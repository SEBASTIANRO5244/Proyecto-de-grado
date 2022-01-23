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
            "id_colegio" => $_POST['id_col'],
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
      $tip_user = $this->session->all_userdata();
      $id_col = $tip_user['id_colegio'];
      $tip_user = $tip_user['tipo_usu'];
      $dato['docente'] = $this->Mdocentes->consultar("Select * from docente where estado='Activo' and id_colegio =".$id_col);
      $this->load->view('tablas/tdocente', $dato);
  }

   public function actualizarPago(){
  $identificacion = $_POST['identificacion'];
  $id_pago_doc = $_POST['id_pago_doc'];


  echo $this->Mdocentes->actualizarPago($identificacion, $id_pago_doc);
 }
}