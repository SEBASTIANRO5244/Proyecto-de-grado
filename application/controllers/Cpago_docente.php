<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpago_docente extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mpago_docente');
  	}

 public  function buscarespecifico()
    {
      # code...
        $id = $_POST['identificacion'];
        $respuesta = $this->Mpago_docente->buscarespecifico($id);
        echo json_encode($respuesta);
    }

      public function guardar()
    {
    $dato = array(
            "fecha" => $_POST['fecha'],
            "numDoc_docente" => $_POST['numdoc_docente'],
            "valor" => $_POST['valor'],
            "nombre_rectora" => $_POST['rectora'],
            "periodo_academico" => $_POST['periodo_academico'],
            "id_colegio" => $_POST['id_col'],
            "mes_academico" => $_POST['mes_academico']
          );

      echo $this->Mpago_docente->guardar($dato);
    }

      public function tpago_doc () {

      $tip_user = $this->session->all_userdata();
      $id_col = $tip_user['id_colegio'];
      $tip_user = $tip_user['tipo_usu'];

      $dato['pago_docente'] = $this->Mpago_docente->consultar("select pago_docente.fecha, 
      pago_docente.numDoc_docente, pago_docente.valor, pago_docente.nombre_rectora, 
      pago_docente.periodo_academico, pago_docente.mes_academico, docente.nombre, 
      docente.apellido, pago_docente.id, pago_docente.id_colegio
      from pago_docente 
      inner join docente 
      on pago_docente.numDoc_docente = docente.numero_documento where  pago_docente.id_colegio=".$id_col);
        $this->load->view('tablas/tpago_doc', $dato);

 }

 public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array(
            "fecha" => $_POST['fecha'],
            "numDoc_docente" => $_POST['numdoc_docente'],
            "valor" => $_POST['valor'],
            "nombre_rectora" => $_POST['rectora'],
            "periodo_academico" => $_POST['periodo_academico'],
            "mes_academico" => $_POST['mes_academico']
          );

      echo $this->Mpago_docente->actualizar($id,$dato);
    }

  public function actualizarDoc(){
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $identificacion = $_POST['identificacion'];
    $id_documen = $_POST['id_documen'];



    echo $this->Mpago_docente->actualizarDoc($nombre, $apellidos, $identificacion, $id_documen);
 }

}