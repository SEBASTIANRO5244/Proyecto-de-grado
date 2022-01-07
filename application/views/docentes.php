<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
  <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>

   </a>
   <h3 class="cecs1" style="color: white;"><b>CENTRO EDUCATIVO CRECER DE SOLEDAD</b></h3> 
</nav>
<head>
  <div class="container">  
<h1 class="display-4" id="titulo4">Registro Docentes</h1>
<!-- BOTONES!-->

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarDoc" placeholder="Buscar Docentes" style="margin-left:400px; width:300px">
    </div>
    </div>
  </div>
</div>
</head>
    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modal_doc">
      <div class="modal-header"></div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
  <center><img  class="acudiente2" src="<?php echo base_url('assets/img/docentes.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Docentes</label></center></h1>
<div class="row">
<input class="form-control rounded-pill" id="Id_doc" type="hidden" placeholder="Id_Docente">
<div class="col-sm-6">
<label for="">Nombres</label>
<input class="input-letter form-control rounded-pill" id="Nombres" type="text" placeholder="Nombres">
</div>
<div class="col-sm-6">
<label for="">Apellidos</label>
<input class="input-letter form-control rounded-pill" type="text" id="Apellidos" placeholder="Apellidos">
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
<label for="">Numero de Documento</label>
<input class="input-number form-control rounded-pill" type="text" id="Identificacion" placeholder="Numero identificación">
</div>
<div class="col-sm-6">
<div class="form-group rounded-pill">
    <label for="exampleFormControlSelect1">Tipo de Documento</label>
    <select class="form-control rounded-pill" id="Tipo">
      <option>Seleccione</option>
      <option>Registro Civil</option>
      <option>Tarjeta Identidad</option>
      <option>Cédula ciudadania</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Télefono</label>
<input class="input-number form-control rounded-pill" type="text" id="Telefono" placeholder="Télefono">
</div>
<div class="col-sm-6">
<label for="">Dirección</label>
<input class="input-direccion form-control rounded-pill" type="text" id="Direccion" placeholder="Dirección">
</div>
<div class="col-sm-6">
<label for="">Profesión/Asignatura</label>
<input class="input-letter form-control rounded-pill" type="text" id="Profesion" placeholder="Profesión/Asignatura">
</div>
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleFormControlSelect1">Contrato</label>
    <select class="form-control rounded-pill" id="Contrato">
      <option>Seleccione</option>
      <option>Tiempo Completo</option>
      <option>Medio Tiempo</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Valor Contrato</label>
<input class="input-number form-control rounded-pill" type="text" id="ValorContrato" placeholder="ValorContrato">
</div>
</div>        
      <div class="modalf_doc">
        <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
        <button onclick="guardar()" type="button" data-dismiss="modal" id="Guardar" class="btn btn-primary">Registrar</button>
        <button type="button" onclick="actualizar()" data-dismiss="modal" class="btn btn-primary" id="Actualizar_doc">Actualizar</button>
        <button type="button" onclick="eliminarmodaldocente()" class="btn btn-primary" data-dismiss="modal" id="Eliminar_doc">Eliminar</button>
         <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/docentes.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id="tdocente"></div>
<div class="boton_agr_doc">
<button type="button" id="New_doc" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-left: 86%; margin-top: 160px; ">Agregar</button></div>
