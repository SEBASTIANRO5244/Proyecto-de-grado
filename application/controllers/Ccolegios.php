<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccolegios extends CI_Controller {
  
    public function __construct(){
        parent::__construct(); 
        $this->load->model('Mcolegios');
    }

    public  function Validar_Dane()
    {
      # code...
        $id = $_POST['dane_colegio'];
        $respuesta = $this->Mcolegios->Validar_Dane($id);
        echo json_encode($respuesta);
    }

    public function guardar()
    {
    $dato = array(

            "dane_colegio" => $_POST['dane'],
            "nombre_colegio" => $_POST['nombre_colegio']
          );

      echo $this->Mcolegios->guardar($dato);
    }

     public function actualizar()
    {
      # code...
      $id["id_colegio"] = $_POST['id_colegio'];
      $dato = array(
        'dane_colegio'=> $_POST['dane'],
        'nombre_colegio' => $_POST['nombre_colegio']
    );
      echo $this->Mcolegios->actualizar($id,$dato);
    }

   public function tcolegios () {
   $dato['colegios'] = $this->Mcolegios->consultar("Select * from colegios");
    $this->load->view('tablas/tcolegios', $dato);
  }
}
 







