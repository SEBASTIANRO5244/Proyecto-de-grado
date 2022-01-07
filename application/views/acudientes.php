<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="">
  <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
  </a>
   <h3 class="cecs1" style="color: white;"><b>CENTRO EDUCATIVO CRECER DE SOLEDAD</b></h3> 
</nav>

  <div class="container">  
<h1 class="display-4" id="titulo1">Registro Acudientes</h1>
<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarAcu" placeholder="Buscar Acudientes" style="width: 300px; margin-left: 400px;">
    </div>
    </div>
  </div>
</div>

    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modal_acu">
      <div class="modal-header"></div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
      <center><img  class="acudiente2" style="width: 20%;" src="<?php echo base_url('assets/img/padre.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Acudientes</label></center></h1>
<div class="row">
<input class="form-control rounded-pill" type="hidden" id="Id_acu" placeholder="Id Acudiente">
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
<label for="">Profesión</label>
<input class="input-letter form-control rounded-pill" type="text" id="Profesion" placeholder="Profesión">
</div>
<div class="col-sm-6">
<label for="">Dirección</label>
<input class="input-direccion form-control rounded-pill" type="text" id="Direccion" placeholder="Dirección">
</div>
</div>        
      <div class="modalf_acu">
        <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
        <button onclick="guardar()" type="button" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
         <button type="button" id="Actualizar_acu" onclick="actualizarmodalacu()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
         <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/acudiente.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id="tacudiente"></div>
<div class="boton_agr_acu">
    <button type="button" class="btn btn-secondary btn-lg" id="New_acu" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 160px; margin-left: 82%">Agregar</button>
</div>