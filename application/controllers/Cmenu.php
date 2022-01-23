<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmenu extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mmenu');

  	}

    public function buscarespecifico()
    {
      # code...
        $id_col = $_POST['id_col'];
        $respuesta = $this->Mmenu->buscarespecifico($id_col);
        echo json_encode($respuesta);
    }
}
