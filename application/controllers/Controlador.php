<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
		public function __construct(){
        parent::__construct(); 
       
  	}

	 public function index()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('login');
		$this->load->view('Componentes/footer');
	}

	 public function menu()
	{
	
	 if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
        
        $this->load->view('Componentes/header');
		$this->load->view('menu');
		$this->load->view('Componentes/footer_form');
        }

		
	}

	 public function estudiante()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('estudiante');
		$this->load->view('Componentes/footer_form');
	}

	 public function acudiente()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('acudientes');
		$this->load->view('Componentes/footer_form');
	}

    public function curso()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('cursos');
		$this->load->view('Componentes/footer_form');
	}

	public function docente()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('docentes');
		$this->load->view('Componentes/footer_form');
	}

	public function matricula()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('matriculas');
		$this->load->view('Componentes/footer_form');
	}

    public function pago_docente()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('pago_docente');
		$this->load->view('Componentes/footer_form');
	}

	public function pago_estudiante()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('pago_estudiante');
		$this->load->view('Componentes/footer_form');
	}

	public function usuarios()
	{
	
		$this->load->view('Componentes/header');
		$this->load->view('usuarios');
		$this->load->view('Componentes/footer_form');
	}

}
