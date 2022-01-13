<div class="scrollbarmatricula scrollbar-primary">
  <div class="force-overflow"></div>
<table class="table" style="margin: auto;">
  <thead class="thead">
    <tr>
      <th scope="col">Nom Est.</th>
      <th scope="col">Ape Est.</th>
      <th scope="col">N.I Est.</th>
      <th scope="col">Grado</th>
      <th scope="col">Nom Acu.</th>
      <th scope="col">Ape Acu.</th>
      <th scope="col">N.I Acu.</th>
      <th scope="col">Fecha</th>
      <th scope="col">Valor</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  <tbody style="background-color: white">
      <tr>
                   <?php

                     if(!empty($matricula)){
                       foreach ($matricula->result() as $data ) {      
                   ?>
                       <tr>
                         <th scope="row">
                           <?php
                             echo $data->nombre_estudiante;
                           ?>
                         <td>
                           <?php
                             echo $data->apellido_estudiante;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->fk_numero_documento_estudiante;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->fk_id_curso;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->nombre_acudiente;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->apellido_acudiente;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->fk_numero_documento_acudiente;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->fecha;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->valor;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->estado;
                           ?>
                         </td>
                          <td>
      <button type="button" class="btn btn-success" id="Actualizar_mat1" data-toggle='modal' data-target='#exampleModal' data-whatever=" @geetbootstrap" onclick="cargarmodalmat('<?php echo $data->fk_numero_documento_estudiante;?>','<?php echo $data->nombre_estudiante;?>','<?php echo $data->apellido_estudiante;?>','<?php echo $data->fk_id_curso;?>','<?php echo $data->fk_numero_documento_acudiente;?>','<?php echo $data->nombre_acudiente;?>','<?php echo $data->apellido_acudiente;?>','<?php echo $data->fecha;?>','<?php echo $data->valor;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
      <button type="button" class="btn btn-danger" id="Eliminar_mat1" data-toggle='modal' data-target='#exampleModal' data-whatever=" @geetbootstrap" onclick="cargarmodalmat('<?php echo $data->fk_numero_documento_estudiante;?>','<?php echo $data->nombre_estudiante;?>','<?php echo $data->apellido_estudiante;?>','<?php echo $data->fk_id_curso;?>','<?php echo $data->fk_numero_documento_acudiente;?>','<?php echo $data->nombre_acudiente;?>','<?php echo $data->apellido_acudiente;?>','<?php echo $data->fecha;?>','<?php echo $data->valor;?>')"><img src="<?php echo base_url('assets/img/eliminar.png');?>"><br><b class="letter"></button></td>
                       </tr>
                  <?php
                       }
                    }
                   ?>    
                  
                 </tr>
  </tbody>
</table>
</div>  
