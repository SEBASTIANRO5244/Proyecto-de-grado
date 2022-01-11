<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
    <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
</nav>
<head>
  <!-- TABLA!-->
<div class="container">  
<h1 class="display-4" id="titulo3">Registro Matriculas</h1>
<!-- BOTONES!-->

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarMat" placeholder="Buscar Matriculas" style="margin-left:400px; width: 300px">
    </div>
    </div>
  </div>
</div>
</head>

    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="m_matricula">
      <div class="modal-header">
      </div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
<center><img  class="acudiente2" style="" src="<?php echo base_url('assets/img/matricula.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Matriculas</label></center></h1>
        <div class="row">
        <div class="col-sm-6">
<label for="">Documento estudiante</label>
<input class="input-number form-control rounded-pill" type="text" id="Identificacion" placeholder="Documento"  style="width: 317px;">
<button onclick="buscarespecifico()" id="Buscar_btnBoton" class="botonbuscarm" type="Submit"><img class="buscar" src="<?php echo base_url('assets/img/buscar1.png');?>"></button> 
</div>
<div class="col-sm-6">
<label for="">Nombres</label>
<input class="input-letter form-control rounded-pill" type="text" id="Nombres" placeholder="Nombres">
</div>
<div class="col-sm-6">
<label for="">Apellidos</label>
<input class="input-letter form-control rounded-pill" type="text" id="Apellidos" placeholder="Apellidos">
</div>
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleFormControlSelect1">Grado a cursar</label>
    <select class="form-control rounded-pill" id="G_Cursar">
      <option>Seleccione</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Documento acudiente</label>
<input class="input-number form-control rounded-pill" type="text" id="Identificacion1" placeholder="Documento" style="width: 317px;">
<button onclick="buscarespecifico1()" id="Buscar_btnBoton1" class="botonbuscaracu" type="Submit"><img class="buscar" src="<?php echo base_url('assets/img/buscar1.png');?>"></button> 
</div>
<div class="col-sm-6">
<label for="">Nombres</label>
<input class="input-letter form-control rounded-pill" type="text" id="Nombres1" placeholder="Nombres">
</div>
<div class="col-sm-6">
<label for="">Apellidos</label>
<input class="input-letter form-control rounded-pill" type="text" id="Apellidos1" placeholder="Apellidos">
</div>     
 <div class="col-sm-6">
<label for="">Fecha</label>
<input class="form-control rounded-pill" type="date" id="Fecha" placeholder="Fecha">
</div> 
<div class="col-sm-6">
<label for="">Valor</label>
<input class="input-number form-control rounded-pill" type="text" id="Valor" placeholder="Valor Matricula">
</div>
      <div class="modalf_mat">
        <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
        <button onclick="guardar()" type="button" data-dismiss="modal" id="Guardar" class="btn btn-primary">Registrar</button>
         <button onclick="actualizar()" type="button" data-dismiss="modal" id="Actualizar_mat" class="btn btn-primary">Actualizar</button>
          <button onclick="eliminar()" type="button" data-dismiss="modal" id="Eliminar_mat" class="btn btn-primary">Eliminar</button>
      </div>
  </div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/controlador/matricula.js');?>"></script>

<div id="tmatriculas"></div>
<div class="boton_agr_matricula">
<a href="<?php echo base_url('index.php/CReportes/matricula') ?>"><button type="button" class="btn btn-secondary btn-lg" data-whatever=" @getbootstrap" style="background-color: #28d; margin-left: 80%; margin-top: 160px;">Reporte</button></a>
<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" id="New_Mat" style="background-color: #28d; margin-top: 160px;">Agregar</button></div>
