<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccurso extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mcurso');
  	}

  	public function guardar()
  	{
  	$dato = array(
  					"nombre" => $_POST['nombres'],
            "id_colegio" => $_POST['id_col']
  				);

  		echo $this->Mcurso->guardar($dato);
  	}

     public function actualizar()
    {
      # code...
      $id["id"] = $_POST['id'];
      $dato = array('nombre' => $_POST['nombre']);
      echo $this->Mcurso->actualizar($id,$dato);
    }

   public function tcurso () {
    $current_user = $this->session->all_userdata();
    $tip_user = $current_user['tipo_usu'];
    $id_colegio = $current_user['id_colegio'];

    $dato['curso'] = $this->Mcurso->consultar("Select * from curso where id_colegio =".$id_colegio);
    $this->load->view('tablas/tcurso', $dato);
  }
}
 

