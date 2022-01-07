<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >  
  <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>CENTRO EDUCATIVO CRECER DE SOLEDAD</b></h3> 
</nav>

<head>
  <div class="container">  
<h1 class="display-4" id="titulo2">Registro Cursos</h1>

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscar" placeholder="Buscar Cursos" style="margin-left:400px; width: 300px">
    </div>
    </div>
  </div>
</div>

</head>

    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="m_curso">
      <div class="modal-header">
      </div>

      <!-- CAJAS DE TEXTO DEL FORM!-->
       <div class="modal-body">
      <center><img  class="acudiente2" style="width: 20%;" src="<?php echo base_url('assets/img/cursos.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Cursos</label></center></h1>
<div class="row">
<div>
   <input style="margin-left: 15px; width: 470px;" class="form-control rounded-pill" type="hidden" id="Id_curso" placeholder="Id Curso">
   <label for="" style="margin-left: 15px;">Nombre</label>
   <input style="margin-left: 70px; width: 470px;" class="input-letter form-control rounded-pill" type="text" id="Nombres" placeholder="Nombre Curso">
</div>
       <div style="margin-left: 200px;">
           <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
           <button type="button" onclick="guardar()" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
           <button type="button" id="Actualizar_curso" onclick="actualizarmodalcurso()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>

            <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/curso.js'); ?>"></script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="tcurso"></div>


<div class="boton_agr_curso">

<a href="<?php echo base_url('index.php/CReportes/curso') ?>"><button type="button" class="btn btn-secondary btn-lg" data-whatever=" @getbootstrap" style="background-color: #28d; margin-left: 66.3%; margin-top: 160px;">Reporte</button></a>
  <button type="button" class="btn btn-secondary btn-lg" id="New_curso" data-toggle="modal" data-target="#exampleModal" 
  data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 160px;">Agregar</button>
</div>


