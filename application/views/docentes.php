<div class="container-fluid">  

  <center>
    <h1 id="titulo5">Registro Docentes</h1>
  </center>  

  <form>
      <center>
        <div class="form-group col-sm-4">
          <input type="text" class="form-control" id="form_buscarDoc" placeholder="Buscar Docentes"> 
        </div>
      </center>
  </form>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal_doc">
        <div class="modal-header"></div>
        <div class="modal-body">
          <center><img  class="acudiente2" src="<?php echo base_url('assets/img/docentes.png');?>"></center>
          <h1><center><label style="text-shadow: 2px 2px 4px #444">Docentes</label></center></h1>
          <div class="row">
            <input class="form-control rounded-pill" id="Id_doc" type="hidden" placeholder="Id_Docente">
            <input class="form-control rounded-pill" id="Id_pago_doc" type="hidden" placeholder="Id_pago_doc">
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
                  <option>TI</option>
                  <option>CC</option>
                  <option>CE</option>
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
              <label for="">Valor nómina</label>
              <input class="input-number form-control rounded-pill" type="text" id="ValorContrato" placeholder="Nómina">
            </div>
          </div>        
          <div class="modalf_doc">
            <button type="button" class="btn btn-secondary" id="Cerrar" data-dismiss="modal">Cerrar</button>
            <button onclick="val_id_doc()" type="button" data-dismiss="modal" id="Guardar" class="btn btn-primary">Registrar</button>
            <button type="button" onclick="actualizar()" data-dismiss="modal" class="btn btn-primary" id="Actualizar_doc">Actualizar</button>
            <button type="button" onclick="eliminarmodaldocente()" class="btn btn-primary" data-dismiss="modal" id="Eliminar_doc">Eliminar</button>
            <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/docentes.js'); ?>"></script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="tdocente"></div>

  <button type="button" id="New_doc" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal" 
    data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; margin-bottom: 60px; 
    margin-right:100px; float:right;">Agregar</button></div>
</div>
