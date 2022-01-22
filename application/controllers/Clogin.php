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
    $tipo_usu = "";
    $sql = "";
    $consulta = "";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select usuario, password, tipo_usu from usuarios where usuario = '" .$user. "' and password = '". $pass ."'";

    $consulta = $this->Mlogin->ingresar($sql);

    if($consulta[1] == true){
      $datasessiones = array('id' => $user,
            'nombre' => $pass,
            'login' => TRUE,
            'tipo_usu' => $consulta[0]->tipo_usu
      );
      $this->session->set_userdata($datasessiones);
      echo json_encode($consulta[0]);
    }else{
      echo false;
    }
  }

  public function logout(){
        $this->session->sess_destroy();
    } 

    public function admin_menu(){

      if (!$this->session->userdata('login') == TRUE) {
                redirect('Controlador');
              }else{
      
        $this->load->view('Componentes/header');
        $this->load->view('admin_menu');
        $this->load->view('Componentes/footer');
      }
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