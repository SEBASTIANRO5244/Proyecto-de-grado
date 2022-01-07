<div class="scrollbar scrollbar-primary" id="scrollbaracu">
  <div class="force-overflow"></div>
<table class="table" id="table1">
  <thead class="thead">
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Género</th>
      <th scope="col">Numero Identificación</th>
      <th scope="col">Tipo Identificación</th>
      <th scope="col">Télefono</th>
      <th scope="col">Profesión</th>
      <th scope="col">Dirección</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  <tbody style="background-color: white">
    
       <tr>
                   <?php

                     if(!empty($acudiente)){
                       foreach ($acudiente->result() as $data ) {      
                   ?>
                       <tr>
                         <th scope="row">
                           <?php
                             echo $data->nombre;
                           ?>
                         <td>
                           <?php
                             echo $data->apellido;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->genero;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->numero_documento;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->tipo_documento;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->telefono;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->profesion;
                           ?>
                         </td>
                          <td>
                           <?php
                             echo $data->direccion;
                           ?>
                         </td>
                          <td>
                           <?php
                             echo $data->estado;
                           ?>
                         </td>
                          <td>
      

      <button type="button" class="btn btn-success" data-toggle='modal' data-target='#exampleModal' id="Actualizar_acu1" data-whatever=" @geetbootstrap" onclick="cargarmodalacu('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->apellido;?>','<?php echo $data->genero;?>','<?php echo $data->numero_documento;?>','<?php echo $data->tipo_documento;?>','<?php echo $data->direccion;?>','<?php echo $data->telefono;?>','<?php echo $data->profesion;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
       </td>
                       </tr>
                  <?php
                       }
                    }
                   ?>    
                  
                 </tr>
  </tbody>
</table>
</div>