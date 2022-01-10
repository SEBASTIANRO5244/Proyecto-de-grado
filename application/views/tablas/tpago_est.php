<div class="scrollbar scrollbar-primary" id="scrollbarpension">
  <div class="force-overflow"></div>
<table class="table" style="margin: auto;">
  <thead class="thead">
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Matricula</th>
      <th scope="col">Nombres Est.</th>
      <th scope="col">Apellidos Est.</th>
      <th scope="col">Nombres Acu.</th>
      <th scope="col">Apellidos Acu.</th>
      <th scope="col">Valor</th>
      <th scope="col">Rectora/Secretaria</th>
      <th scope="col">Periodo Academico</th>
      <th scope="col">Mes Academico</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($pension)){
                       foreach ($pension->result() as $data ) {      
                   ?>
                       <tr>
                         <td>
                           <?php
                             echo $data->fecha;
                           ?>
                           </td>
                         <td>
                           <?php
                             echo $data->fk_id_matricula;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->nombre_estudiante;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->apellido_estudiante;
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
                             echo $data->valor;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->nombre_admin;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->periodo_academico;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->mes_academico;
                           ?>
                         </td>
                          <td>
      

      <button type="button" class="btn btn-success" data-toggle='modal' data-target='#exampleModal' id="Actualizar_pension1" data-whatever=" @geetbootstrap" onclick="cargarmodalPEst('<?php echo $data->id;?>','<?php echo $data->fecha;?>','<?php echo $data->valor;?>','<?php echo $data->nombre_estudiante;?>','<?php echo $data->apellido_estudiante;?>','<?php echo $data->nombre_acudiente;?>','<?php echo $data->apellido_acudiente;?>','<?php echo $data->nombre_admin;?>','<?php echo $data->fk_id_matricula;?>','<?php echo $data->mes_academico;?>','<?php echo $data->periodo_academico;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>

        <a href="" class="btn btn-warning reportePago"><img src="<?php echo base_url('assets/img/reporte.png');?>"></a>
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