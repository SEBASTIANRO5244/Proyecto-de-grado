<div class="container-fluid">  

  <center>
    <h1 id="titulo5">Registro Matriculas</h1>
  </center>  

  <form>
      <center>
        <div class="form-group col-sm-4">
          <input type="text" class="form-control" id="form_buscarMat" placeholder="Buscar Matriculas"> 
        </div>
      </center>
  </form>
    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="m_matricula">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <center><img  class="acudiente2" style="" src="<?php echo base_url('assets/img/matricula.png');?>"></center>
          <h1><center><label style="text-shadow: 2px 2px 4px #444">Matriculas</label></center></h1>
          <div class="row">
            <div class="col-sm-6" style="display: none;">
              <input class="input-letter form-control rounded-pill" type="text" id="Estado_est">
            </div>
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
              <button type="button" style="margin-top: 35px;" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
              <button onclick="val_estado_est()" type="button" style="margin-top: 35px;" data-dismiss="modal" id="Guardar" class="btn btn-primary">Registrar</button>
              <button onclick="actualizar()" style="margin-top: 35px;" type="button" data-dismiss="modal" id="Actualizar_mat" class="btn btn-primary">Actualizar</button>
              <button onclick="eliminar()" style="margin-top: 35px;" type="button" data-dismiss="modal" id="Eliminar_mat" class="btn btn-primary">Eliminar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/matricula.js');?>"></script>

  <div id="tmatriculas"></div>

  <a href="<?php echo base_url('index.php/CReportes/matricula') ?>"><button type="button" class="btn btn-secondary btn-lg" 
    data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; margin-right:100px; 
    float:right;">Reporte</button></a>
  <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal" 
    data-whatever=" @getbootstrap" id="New_Mat" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; 
    margin-right:25px; float:right;">Agregar</button></div>
</div>