<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
     <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>CENTRO EDUCATIVO CRECER DE SOLEDAD</b></h3> 
</nav>
<body>
  <head>
<div class="container">  
<h1 class="display-4" id="titulo6">Registro Pago Docentes</h1>
<!-- BOTONES!-->

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarPDoc" placeholder="Buscar pago" style="margin-left:400px; width: 240px">
    </div>
    </div>
</div>
  </head>
    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="pago_doc">
      <div class="modal-header">
      </div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
      <center><img  class="acudiente2" src="<?php echo base_url('assets/img/pago.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Pago Docentes</label></center></h1>
<div class="row">
<input class="form-control rounded-pill" type="hidden" id="Id" placeholder="Id">
<div class="col-sm-6">
<label for="">Fecha</label>
<input class="form-control rounded-pill" type="date" id="Fecha" placeholder="Fecha">
</div>
<div class="col-sm-6">
<label for="">Numero Documento</label>
<input class="input-number form-control rounded-pill" type="text" id="Identificacion" placeholder="Documento" style="width: 290px;">
<button class="botonbuscar" onclick="buscarespecifico()" type="Submit"><img class="buscar" src="<?php echo base_url('assets/img/buscar1.png');?>"></button> 
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
<label for="">Valor Pago</label>
<input class="input-number form-control rounded-pill" type="text" id="Valor" placeholder="Valor">
</div>
<div class="col-sm-6">
<label for="">Rectora</label>
<input class="input-letter form-control rounded-pill" type="text" id="Admin" placeholder="Rectora">
</div>
</div>        
      <div class="modalf_pdoc">
        <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="guardar()" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
        <button type="button" id="Actualizar_doc" onclick="actualizar()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
        <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/pago_docente.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id="tpago_doc"></div>
<div class="boton_agr_pago_doc">
    <button type="button" class="btn btn-secondary btn-lg" id="New_doc" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-left: 82%; margin-top: 160px;">Agregar</button>
    </div>