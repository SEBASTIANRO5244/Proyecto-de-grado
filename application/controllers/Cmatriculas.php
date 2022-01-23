<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmatriculas extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mmatricula');

  	}

 public  function buscarespecifico()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mmatricula->buscarespecifico($id);
        echo json_encode($respuesta);
    }

    public  function val_estado_est()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mmatricula->val_estado_est($id);
        echo json_encode($respuesta);
    }

  public  function buscarespecifico1()
    {
      # code...
        $id = $_POST['identificacion1'];
        $respuesta = $this->Mmatricula->buscarespecifico1($id);
        echo json_encode($respuesta);
    }

    public function guardar()
    {
    $dato = array(
            "nombre_estudiante" => $_POST['nombres'],
            "apellido_estudiante" => $_POST['apellidos'],
            "fk_numero_documento_estudiante" => $_POST['identificacion'],
            "fk_numero_documento_acudiente" => $_POST['identificacion1'],
            "nombre_acudiente" => $_POST['nombres1'],
            "apellido_acudiente" => $_POST['apellidos1'],
            "fecha" => $_POST['fecha'],
            "fk_id_curso" => $_POST['curso'],
            "valor" => $_POST['valor'],
            "estado" => $_POST['estado'],
            "id_colegio" => $_POST['id_col']
          );

      echo $this->Mmatricula->guardar($dato);
    }

    public function tmatriculas() {
    $current_user = $this->session->all_userdata();
    $tip_user = $current_user['tipo_usu'];
    $id_colegio = $current_user['id_colegio'];



    $dato['matricula'] = $this->Mmatricula->consultar("Select * from matricula where estado='Matriculado' and id_colegio =".$id_colegio);
    $this->load->view('tablas/tmatriculas', $dato);

  }

  public function CargarCombo(){
      echo $this->Mmatricula->CargarCombo();
    }

    public function actualizar()
    {
            $fecha = $_POST['fecha'];
            $valor = $_POST['valor'];
            $fk_numero_documento_estudiante = $_POST['numero_doc_Es'];
            $nombre_estudiante = $_POST['nombre_estu'];
            $apellido_estudiante = $_POST['apellido_Estu'];
            $fk_numero_documento_acudiente = $_POST['numero_doc_acu'];
            $nombre_acudiente= $_POST['nombre_acu'];
            $apellido_acudiente = $_POST['apellido_acu'];
            $fk_id_curso = $_POST['curso'];
            echo $this->Mmatricula->actualizar($fecha,$valor,$fk_numero_documento_estudiante,
            $nombre_estudiante,$apellido_estudiante,$fk_numero_documento_acudiente,
            $nombre_acudiente,$apellido_acudiente,$fk_id_curso);
    }


    public function cambiarestado(){


      $data = array(
           'estado' => 'Matriculado',
           'numero_documento' => $_POST['documento']
        );

       echo $this->Mmatricula->cambiarestado($data);

    }



     public function cambiarestadoAcu(){


      $data = array(
           'estado' => 'Activo',
           'numero_documento' => $_POST['documento']
        );

       echo $this->Mmatricula->cambiarestadoAcu($data);

    }

   
     public function EliminarestadoEst(){


      $data = array(
           'estado' => 'Inactivo',
           'numero_documento' => $_POST['documento']
        );

       echo $this->Mmatricula->EliminarestadoEst($data);

    }

     public function EliminarestadoAcu(){


      $data = array(
           'estado' => 'Inactivo',
           'numero_documento' => $_POST['documento']
        );

       echo $this->Mmatricula->EliminarestadoAcu($data);

    }

     public function eliminar()
    {
    $fk_numero_documento_estudiante = $_POST['numero_doc_Es'];
    $estado = $_POST['estado'];
    echo $this->Mmatricula->eliminar($fk_numero_documento_estudiante,$estado);
    }

     public function actualizarEst(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Mmatricula->actualizarEst($nombre, $apellidos, $identificacion);
 }

   public function actualizarAcu(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];

  echo $this->Mmatricula->actualizarAcu($nombre, $apellidos, $identificacion);
 }

 public function actualizarPago(){
  $nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $identificacion = $_POST['identificacion'];


  echo $this->Mmatricula->actualizarPago($nombre, $apellidos, $identificacion);
 }
}
