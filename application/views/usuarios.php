<nav class="navbar navbar-light" style="background-color: #28d;">
  <a class="navbar-brand" href="" >
    <a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
   </a>
   <h3 class="cecs1" style="color: white;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
</nav>
   <head>
     <!-- TABLA!-->
<div class="container">  
<h1 class="display-4" id="titulo7">Registro Usuarios</h1>
<!-- BOTONES!-->

<div class="col-sm-6">
 <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <input type="text" class="form-control" id="form_buscarUsu" placeholder="Buscar usuario" style="margin-left:400px; width: 300px">
    </div>
    </div>
  </div>
</div>
</head> 
<!-- ANIMACION Y DIV DEL FORMULARIO!-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modal_usu" style="height: 77%;">
      <div class="modal-header">
      </div>
      <!-- CAJAS DE TEXTO DEL FORM!-->
      <div class="modal-body">
      <center><img  class="usuarios_img" style="width: 20%;" src="<?php echo base_url('assets/img/usuario.png');?>"></center>
<h1><center><label style="text-shadow: 2px 2px 4px #444">Registro Login</label></center></h1>
<div class="row">
<input class="form-control rounded-pill" id="Id" type="hidden" placeholder="Id">
<div class="col-sm-6">
<label for="">Nombre</label>
<input class="input-letter form-control rounded-pill" id="Nombres" type="text" placeholder="Nombres">
</div>
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleFormControlSelect1">Tipo Usuario</label>
    <select class="form-control rounded-pill" id="Tipo_Usuario">
      <option>Seleccione</option>
      <option>Secretario</option>
      <option>Rector</option>
    </select>
  </div>
</div>
<div class="col-sm-6">
<label for="">Usuario</label>
<input class="form-control rounded-pill" type="text" id="Nom_Usuario" placeholder="Usuario">
</div>
<div class="col-sm-6">
<label for="">Contraseña</label>
<input class="form-control rounded-pill" type="password" id="Contraseña" placeholder="Contraseña">
</div>
      <div class="modalf_usu">
        <button type="button" id="Cerrar" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="guardar()" id="Guardar" type="button" data-dismiss="modal" class="btn btn-primary">Registrar</button>
        <button type="button" onclick="eliminarmodalusuarios()" class="btn btn-primary" data-dismiss="modal" id="Eliminar_usu">Eliminar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="actualizarmodalusu()" id="Actualizar_usu">Actualizar</button>
         <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/usuarios.js'); ?>"></script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div id="tusuarios"></div>
<div>
    <button type="button" class="btn btn-secondary btn-lg" id="New_usuario" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 160px; margin-left: 74.5%;">Agregar</button>
    </div>
