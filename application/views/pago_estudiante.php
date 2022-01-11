<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
     <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
</nav>
<body>
  <head>
<div class="container">  
<h1 class="display-4" id="titulo5">Registro Pago Estudiantes</h1>
<!-- BOTONES!-->
    
<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarPEst" placeholder="Buscar pago" style="width: 300px;margin-left: 400px">
    </div>
    </div>
  </div>
</div>
  </head>
    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="pago_est">
      <div class="modal-header">
      </div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
      <center><img  class="acudiente2" src="<?php echo base_url('assets/img/icono.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Pago Estudiantes</label></center></h1>
<div class="row">
  <input class="form-control rounded-pill" type="hidden" id="Id" placeholder="Id_Pago">
  <div class="col-sm-6">
    <label for="">Fecha</label>
    <input class="form-control rounded-pill" type="date" id="Fecha" placeholder="Fecha">
  </div>
  <div class="col-sm-6">
    <label for="">Documento Estudiante</label>
    <input class="input-number form-control rounded-pill" type="text" id="Identificacion" placeholder="Documento Estudiante" style="width: 290px;">
    <button class="botonbuscar" onclick="buscarespecifico()" type="Submit"><img class="buscar" src="<?php echo base_url('assets/img/buscar1.png');?>"></button> 
  </div>
  <div class="col-sm-6">
    <label for="">Nombres Est.</label>
    <input class="input-letter form-control rounded-pill" type="text" id="Nombres" placeholder="Nombres">
  </div>
  <div class="col-sm-6">
    <label for="">Apellidos Est.</label>
    <input class="input-letter form-control rounded-pill" type="text" id="Apellidos" placeholder="Apellidos">
  </div>
  <div class="col-sm-6">
    <label for="">Nombres Acu.</label>
    <input class="input-letter form-control rounded-pill" type="text" id="Nombres1" placeholder="Nombres">
  </div>
  <div class="col-sm-6">
    <label for="">Apellidos Acu.</label>
    <input class="input-letter form-control rounded-pill" type="text" id="Apellidos1" placeholder="Apellidos">
  </div>
  <div class="col-sm-6">
    <label for="">Valor Pago</label>
    <input class="input-number form-control rounded-pill" type="text" id="Valor" placeholder="Valor">
  </div>
  <div class="col-sm-6">
    <label for="">Rectora/Secretaria</label>
    <input class="input-letter form-control rounded-pill" type="text" id="Admin" placeholder="Rectora/Secretaria">
  </div>
 <div class="col-sm-6">
    <label for="exampleFormControlSelect1">Periodo Academico</label>
    <select class="form-control rounded-pill" id="Periodo_academico">
      <option >Seleccione</option>
      <option value="2022">2022</option>
    </select>
  </div>
  <div class="col-sm-6">
    <label for="exampleFormControlSelect1">Mes Academico</label>
    <select class="form-control rounded-pill" id="Mes_academico">
      <option>Seleccione</option>
      <option>Febrero</option>
      <option>Marzo</option>
      <option>Abril</option>
      <option>Mayo</option>
      <option>Junio</option>
      <option>Julio</option>
      <option>Agosto</option>
      <option>Septiembre</option>
      <option>Octubre</option>
      <option>Noviembre</option>
    </select>
  </div>
</div>        
      <div class="modalf-pest">
        <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="guardar()" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
        <button type="button" class="btn btn-primary" onclick="actualizarmodalPEst()" data-dismiss="modal" id="ActualizarPEst">Actualizar</button>
        <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/pago_estudiante.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id="tpago_est"></div>
<div class="boton_agr_pago_est">
    <button type="button" onclick="limpiar()" class="btn btn-secondary btn-lg" id="New_PEst" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 160px; margin-left: 88%">Agregar</button>
    </div>