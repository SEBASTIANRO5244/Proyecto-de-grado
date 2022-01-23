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
		$this->load->view('Componentes/footer');
        }

		
	}

	public function admin_menu()
	{
	 if ((!$this->session->userdata('login') == TRUE) || ($this->session->userdata('tipo_usu') == 0) ) {
            redirect('Controlador');
        }else{
        
        $this->load->view('Componentes/header');
		$this->load->view('admin_menu');
		$this->load->view('Componentes/footer');
        }		
	}

	 public function estudiante()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
	
			$this->load->view('Componentes/header_forms');
			$this->load->view('estudiante');
			$this->load->view('Componentes/footer');
		}
	}

	 public function acudiente()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
	
			$this->load->view('Componentes/header_forms');
			$this->load->view('acudientes');
			$this->load->view('Componentes/footer');
		}
	}

    public function curso()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('cursos');
			$this->load->view('Componentes/footer');
		}
	}

	public function docente()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('docentes');
			$this->load->view('Componentes/footer');
		}
	}

	public function matricula()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('matriculas');
			$this->load->view('Componentes/footer');
		}
	}

    public function pago_docente()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('pago_docente');
			$this->load->view('Componentes/footer');
		}
	}

	public function pago_estudiante()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('pago_estudiante');
			$this->load->view('Componentes/footer');
		}
	}

	public function usuarios()
	{
		if (!$this->session->userdata('login') == TRUE) {
            redirect('Controlador');
        }else{
			$this->load->view('Componentes/header_forms');
			$this->load->view('usuarios');
			$this->load->view('Componentes/footer');
		}
	}



	public function colegios()
	{
	
		$this->load->view('Componentes/header_forms');
		$this->load->view('colegios');
		$this->load->view('Componentes/footer');
	}


}
