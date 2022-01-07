<div class="scrollbarUsu scrollbar-primary" id="scrollbarUsu">
  <div class="force-overflow"></div>
<table class="table" id="table1">
  <thead class="thead">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo Usuario</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($usuarios)){
                       foreach ($usuarios->result() as $data ) {      
                   ?>
                       <tr>
                         <th scope="row">
                           <?php
                             echo $data->nombre;
                           ?>
                         <td>
                           <?php
                             echo $data->tipo_usuario;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->usuario;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->password;
                           ?>
                         </td>
                      
                          <td>
      <button type="button" class="btn btn-success" data-toggle='modal' data-target='#exampleModal' id="Actualizar_usu1" data-whatever=" @geetbootstrap" onclick="cargarmodalusu('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->tipo_usuario;?>','<?php echo $data->usuario;?>','<?php echo $data->password;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
      <button type="button" class="btn btn-danger" data-toggle='modal' id="Eliminar_usu1" data-target='#exampleModal' data-whatever=" @geetbootstrap"  onclick="cargarmodalusu('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->tipo_usuario;?>','<?php echo $data->usuario;?>','<?php echo $data->password;?>')"><img src="<?php echo base_url('assets/img/eliminar.png');?>"><br><b class="letter"></button>
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