
<div class="container-fluid">  

  <center>
    <h1 id="titulo5">Registro Estudiantes</h1>
  </center>  

  <form>
      <center>
        <div class="form-group col-sm-4">
          <input type="text" class="form-control" id="form_buscarEst" placeholder="Buscar Estudiantes"> 
        </div>
      </center>
  </form>

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
              <button onclick="val_id_est()" style="margin-top: 30px"; type="button" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
              <button type="button" id="Actualizar_est" onclick="actualizar()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
              <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/estudiante.js'); ?>"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="testudiante"></div>
  
  <a href="<?php echo base_url('index.php/CReportes/estudiante') ?>"><button type="button" class="btn btn-secondary btn-lg" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; margin-right:100px; float:right;">Reporte</button></a>
  <button type="button" onclick="limpiar()" class="btn btn-secondary btn-lg" id="New_est" data-toggle="modal" data-target="#exampleModal" data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; margin-right:25px; float:right;">Agregar</button>

</div>
