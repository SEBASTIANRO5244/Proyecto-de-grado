<div class="container-fluid">  

  <center>
    <h1 id="titulo5">Registro Colegios</h1>
  </center>  

  <form>
      <center>
        <div class="form-group col-sm-4">
          <input type="text" class="form-control" id="form_buscar" placeholder="Buscar Colegios"> 
        </div>
      </center>
  </form>

    <!-- ANIMACION Y DIV DEL FORMULARIO!-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="m_colegios">
        <div class="modal-header">
        </div>
        <!-- CAJAS DE TEXTO DEL FORM!-->
        <div class="modal-body">
          <center><img  class="" src="<?php echo base_url('assets/img/Colegios.png');?>"></center>
          <h1><center><label style="text-shadow: 2px 2px 4px #444">Colegios</label></center></h1>
          <div class="row">
            <div>
               <input style="margin-left: 15px; width: 470px;" class="form-control rounded-pill" type="hidden" id="Id_Colegio" placeholder="Id">
              <label for="" style="margin-left: 15px;">DANE Colegio</label>
              <input style="margin-left: 15px; width: 470px;" class="form-control rounded-pill" type="text" id="DANE_colegios" placeholder="DANE">
              <label for="" style="margin-left: 15px;">Nombre Colegio</label>
              <input style="margin-left: 15px; width: 470px;" class="input-letter form-control rounded-pill" type="text" id="Nombre_Colegio" placeholder="Nombre">
            </div>

            <div style="margin-left: 130px;">
              <button type="button" class="btn btn-secondary" id="Cerrar" style="margin-left: 40px;"data-dismiss="modal">Cerrar</button>
              <button type="button" onclick="Validar_Dane()" id="Guardar" data-dismiss="modal" class="btn btn-primary">Registrar</button>
              <button type="button" id="Actualizar_colegio" onclick="actualizarmodalcolegio()" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
              <script type="text/javascript" src="<?php echo base_url('assets/js/controlador/colegios.js'); ?>"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="tcolegios"></div>


  <button type="button" class="btn btn-secondary btn-lg" id="New_colegio" data-toggle="modal" data-target="#exampleModal" 
    data-whatever=" @getbootstrap" style="background-color: #28d; margin-top: 200px; 
    margin-bottom: 60px; margin-right:25px; float:right;">Agregar</button>
</div>

