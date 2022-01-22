<div class="container-fluid">  

  <center>
    <h1 id="titulo5">Registro Usuarios</h1>
  </center>  

  <form>
      <center>
        <div class="form-group col-sm-4">
          <input type="text" class="form-control" id="form_buscarUsu" placeholder="Buscar usuario"> 
        </div>
      </center>
  </form>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal_usu" style="height: 77%;">
        <div class="modal-header">
        </div>
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
                <select class="form-control rounded-pill" id="Tipo_Usuario" name="form_select" onchange="showDiv('hidden_div', this)">
                  <option>Seleccione</option>
                  <option>Secretario</option>
                  <option>Rector</option>
                  <?php 
                    $tip_user = $this->session->all_userdata();
                    $tip_user = $tip_user['tipo_usu']
                  ?>
                  <?php if($tip_user == 1){ ?>
                    <option>Admin</option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div id="hidden_div">
              <div class="col">
                <label for="">Numero NIT colegio</label>
                <input class="input-number form-control rounded-pill" type="text" id="Numero_NIT" placeholder="Número de NIT" style="width: 290px;">
                <button class="botonbuscar" onclick="buscarespecifico()" type="Submit"><img class="buscar" src="<?php echo base_url('assets/img/buscar1.png');?>"></button> 
                
              </div>
              <div class="col">
                <label for="">Colegio</label>
                <input class="input-letter form-control rounded-pill" type="text" id="Colegio" placeholder="Nombre Colegio">
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
              <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="actualizarmodalusu()" 
              id="Actualizar_usu">Actualizar</button>
              <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/usuarios.js'); ?>"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="tusuarios"></div>
  <button type="button" class="btn btn-secondary btn-lg" id="New_usuario" onclick="style_div('hidden_div', document.getElementById('Tipo_Usuario'))"
    data-toggle="modal" data-target="#exampleModal" 
    data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; 
    margin-right:100px; float:right;">Agregar
  </button>
</div>

<script>
    function showDiv(divId, element)
  {
      document.getElementById(divId).style.display = element.value == "Admin" ? 'none' : 'block';
  }

  function style_div(divId, element)
  {
    var value = document.getElementById('Tipo_Usuario');
    if(element.value == "Admin"){
      document.getElementById(divId).style.display = 'none';
    }else{
      document.getElementById(divId).style.display = 'block';
    }
  }
</script>
