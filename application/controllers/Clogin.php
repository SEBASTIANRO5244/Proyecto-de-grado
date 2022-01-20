<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 

         
        $this->load->model("Mlogin");
  	}

public function index(){
   if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
          }else{
                $this->load->view('Componentes/header');
                $this->load->view('login');
                $this->load->view('Componentes/footer');
          }
  
}

  public function ingresar(){

    $user = "";
    $pass = "";
    $sql = "";
    $consulta = "";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select usuario, password from usuarios where usuario = '" .$user. "' and password = '". $pass ."'";

    $consulta = $this->Mlogin->ingresar($sql);

    if($consulta != true){
       echo false;
    }else{
      $datasessiones = array('id' => $user,
                             'nombre' => $pass,
                             'login' => TRUE
                       );
      $this->session->set_userdata($datasessiones);
      echo true;
    }


  }

  public function logout(){
        $this->session->sess_destroy();
    } 

 public function menu(){

  if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
          }else{
  
    $this->load->view('Componentes/header');
    $this->load->view('menu');
    $this->load->view('Componentes/footer');
  }
  }

}