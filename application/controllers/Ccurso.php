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
  					"nombre" => $_POST['nombres']
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
   $dato['curso'] = $this->Mcurso->consultar("Select * from curso");
    $this->load->view('tablas/tcurso', $dato);
  }
}
 

