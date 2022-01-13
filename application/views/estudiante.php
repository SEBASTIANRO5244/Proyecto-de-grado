<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
      <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
</nav>
  <head>
    <div class="container">  
<h1 class="display-4" id="titulo1"> Registro Estudiantes</h1>
<!-- BOTONES!-->

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarEst" placeholder="Buscar Estudiantes" style="margin-left:400px; width: 300px;">
    </div>
    </div>
  </div>
</div>
  </head>
    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modal_estu">
      <div class="modal-header">
      </div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
<center><img  class="" style="" src="<?php echo base_url('assets/img/estudiante.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Estudiantes</label></center></h1>
<div class="row">
   <div class="col-sm-6" style="">
          <input class="input-letter form-control rounded-pill" type="text" id="Estado_est">
</div>
 <input class="form-control rounded-pill" type="hidden" id="Id_est" placeholder="Id Estudiante">
<div class="col-sm-6">
<label for="">Nombres</label>
<input class="input-letter form-control rounded-pill" type="text" placeholder="Nombres"  id="Nombres">
</div>
<div class="col-sm-6">
<label for="">Apellidos</label>
<input class="input-letter form-control rounded-pill" type="text" placeholder="Apellidos"  id="Apellidos">
</div>
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleFormControlSelect1">Género</label>
    <select class="form-control rounded-pill" id="Genero">
      <option>Seleccione</option>
      <option>Masculino</option>
      <option>Femenino</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Fecha de nacimiento</label>
<input class="form-control rounded-pill" type="date" placeholder="Fecha Nacimiento" id="Fecha_Nac">
</div>
<div class="col-sm-6">
<label for="">Lugar de Naciemto</label>
<input class="input-letter form-control rounded-pill" type="text" placeholder="Lugar Naciemto" id="Lugar_Nac">
</div>
<div class="col-sm-6">
<label for="">Numero de Documento</label>
<input class="input-number form-control rounded-pill" type="text" placeholder="Numero identificación" id="Identificacion">
</div>
<div class="col-sm-6">
<div class="form-group rounded-pill">
    <label for="exampleFormControlSelect1">Tipo de Documento</label>
    <select class="form-control rounded-pill"  id="Tipo">
      <option>Seleccione</option>
      <option>RC</option>
      <option>TI</option>
      <option>CC</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Dirección</label>
<input class="input-direccion form-control rounded-pill" type="text" placeholder="Dirección" id="Direccion">
</div>
<div class="col-sm-6">
<label for="">EPS</label>
<input class="input-letter form-control rounded-pill" type="text" placeholder="EPS" id="Eps">
</div>       
      <div class="modal_fest">
        <button type="button" class="btn btn-secondary" id="Cerrar" style="margin-top: 30px;" data-dismiss="modal">Cerrar</button>
        <button onclick="guardar()" style="margin-top: 30px"; type="button" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
         <button type="button" id="Actualizar_est" onclick="actualizar()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
        <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/estudiante.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id="testudiante"></div>
<div class="boton_agr_est">
  <a href="<?php echo base_url('index.php/CReportes/estudiante') ?>"><button type="button" class="btn btn-secondary btn-lg" data-whatever=" @getbootstrap" style="background-color: #28d; margin-left: 82.7%; margin-top: 160px;">Reporte</button></a>
  <button type="button" class="btn btn-secondary btn-lg" id="New_est" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 160px;">Agregar</button>
</div>
