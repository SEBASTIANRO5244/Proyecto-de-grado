<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuarios extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Musuarios');
  	}

    public  function buscarespecifico()
    {
      # code...
        $id = $_POST['nit'];
        $respuesta = $this->Musuarios->buscarespecifico($id);
        echo json_encode($respuesta);
    }

  	public function guardar()
  	{
  	$dato = array(
  					"nombre" => $_POST['nombres'],
  					"tipo_usuario" => $_POST['tipo'],
            "tipo_usu" => $_POST['id_tipo_usu'],
  					"usuario" => $_POST['users'],
            "id_colegio" => $_POST['nit'],
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
            "tipo_usu" => $_POST['id_tipo_usu'],
            "usuario" => $_POST['users'],
            "id_colegio" => $_POST['nit'],
            "password" => $_POST['pass']
          );

      echo $this->Musuarios->actualizar($id,$dato);
    }

      public function tusuarios () {
        $tip_user = $this->session->all_userdata();
        $id_col = $tip_user['id_colegio'];
	      $tip_user = $tip_user['tipo_usu'];
        

        if($tip_user == 1){
          $dato['usuarios'] = $this->Musuarios->consultar("
            select * from usuarios
          ");
        }else{
          $dato['usuarios'] = $this->Musuarios->consultar("
            select colegios.nombre_colegio, usuarios.id,
            usuarios.nombre, usuarios.tipo_usuario, usuarios.usuario,
            usuarios.password, usuarios.tipo_usu, usuarios.id_colegio from usuarios 
            inner join colegios 
            on usuarios.id_colegio = colegios.id_colegio
            where usuarios.tipo_usu = 0 and usuarios.id_colegio = ".$id_col);
        }

        $this->load->view('tablas/tusuarios', $dato);
 }

 public function eliminar()
    {
      # code...
       $id["id"] = $_POST['id'];
       echo $this->Musuarios->eliminar($id);

    }
}