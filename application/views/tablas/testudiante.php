<div class="scrollbar scrollbar-primary" id="scrollbarestu">
  <div class="force-overflow"></div>
<table class="table" style="width: 100%; margin: auto;">
  <thead class="thead">
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Género</th>
      <th scope="col">Fecha_Nac</th>
      <th scope="col">Lugar_Nac</th>
      <th scope="col">Identificación</th>
      <th scope="col">Tipo_Id</th>
      <th scope="col">Dirección</th>
      <th scope="col">EPS</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  <tbody style="background-color: white">

       <tr>
                   <?php

                     if(!empty($estudiante)){
                       foreach ($estudiante->result() as $data ) {      
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
                             echo $data->fecha_nacimiento;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->lugar_nacimiento;
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
                             echo $data->direccion;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->eps;
                           ?>
                         </td>
                         <td>
                           <?php
                            echo $data->estado;
                           ?>
                         </td>
                          <td>
      

      <button type="button" class="btn btn-success" data-toggle='modal' data-target='#exampleModal' id="Actualizar_est1" data-whatever=" @geetbootstrap" onclick="cargarmodalest('<?php echo $data->id;?>','<?php echo $data->nombre;?>','<?php echo $data->apellido;?>','<?php echo $data->genero;?>','<?php echo $data->fecha_nacimiento;?>','<?php echo $data->lugar_nacimiento;?>','<?php echo $data->numero_documento;?>','<?php echo $data->tipo_documento;?>','<?php echo $data->direccion;?>','<?php echo $data->eps;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
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
