<div class="scrollbardoc scrollbar-primary">
  <div class="force-overflow"></div>
<table class="table" style="margin: auto;">
  <thead class="thead">
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Género</th>
      <th scope="col">Tipo Identificación</th>
      <th scope="col">Num_Ide</th>
      <th scope="col">Profesión</th>
      <th scope="col">Télefono</th>
      <th scope="col">Contrato</th>
      <th scope="col">Valor Contrato</th>
      <th scope="col">Dirección</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  <tbody style="background-color: white">
       <tr>
                   <?php

                     if(!empty($docente)){
                       foreach ($docente->result() as $data ) {      
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
                             echo $data->tipo_documento;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->numero_documento;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->profesion;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->telefono;
                           ?>
                         </td>
                          <td>
                           <?php
                             echo $data->contrato;
                           ?>
                         </td>
                          <td>
                           <?php
                             echo $data->valorContrato;
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
      <button type="button" class="btn btn-success" id="Actualizar_doc1" data-toggle='modal' data-target='#exampleModal' data-whatever=" @geetbootstrap" onclick="cargarmodaldoc('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->apellido;?>','<?php echo $data->genero;?>','<?php echo $data->numero_documento;?>','<?php echo $data->tipo_documento;?>','<?php echo $data->direccion;?>','<?php echo $data->telefono;?>','<?php echo $data->profesion;?>','<?php echo $data->contrato;?>','<?php echo $data->valorContrato;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
       <button type="button" class="btn btn-danger" data-toggle='modal' id="Eliminar_doc1" data-target='#exampleModal' data-whatever=" @geetbootstrap"  onclick="cargarmodaldoc('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->apellido;?>','<?php echo $data->genero;?>','<?php echo $data->numero_documento;?>','<?php echo $data->tipo_documento;?>','<?php echo $data->direccion;?>','<?php echo $data->telefono;?>','<?php echo $data->profesion;?>','<?php echo $data->contrato;?>','<?php echo $data->valorContrato;?>')"><img src="<?php echo base_url('assets/img/eliminar.png');?>"><br><b class="letter"></button>
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
</div>      
</div>