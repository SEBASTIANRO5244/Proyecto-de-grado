<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CReportes extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Reportes');
  	}

public function curso ()
   {
       $data['curso']=$this->Reportes->curso();
       $mpdf = new \Mpdf\Mpdf();
       $html = $this->load->view('treportes/TRcurso',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output();

   }

  public function pension($fecha, $matricula)
   {
       $data['pension']=$this->Reportes->pension($fecha, $matricula);
       $mpdf = new \Mpdf\Mpdf();
       $html = $this->load->view('treportes/TRPagoEstudiante',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output();
   
   }

     public function pago_Docente($fecha, $documento)
   {
       $data['pago_docente']=$this->Reportes->pago_Docente($fecha, $documento);
       $mpdf = new \Mpdf\Mpdf();
       $html = $this->load->view('treportes/TRPagoDocente',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output();
   
   }

  public function estudiante ()
   {
       $data['estudiante']=$this->Reportes->estudiante();
       $mpdf = new \Mpdf\Mpdf();
       $html = $this->load->view('treportes/TREstudiante',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output();

   }

    public function matricula ()
   {
       $data['matricula']=$this->Reportes->matricula();
       $mpdf = new \Mpdf\Mpdf();
       $html = $this->load->view('treportes/TRMatricula',$data,true);
       $mpdf->WriteHTML($html);
       $mpdf->Output();

   }

  }