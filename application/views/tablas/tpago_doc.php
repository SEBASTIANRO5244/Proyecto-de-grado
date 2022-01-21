<div class="scrollbar scrollbar-primary" id="scrollbaracu">
  <div class="force-overflow"></div>
  <table class="table" style="width: 100%; margin: auto;">
  <thead class="thead">
    <tr>
      <th scope="col" style="display:none">Id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Identificación</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nómina</th>
      <th scope="col">Entregado por</th>
      <th scope="col">Periodo Acad</th>
      <th scope="col">Mes Acad</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
    <tr>
                   <?php

                     if(!empty($pago_docente)){
                       foreach ($pago_docente->result() as $data ) {      
                   ?>
                       <tr>
                        <td style="display:none;">
                           <?php
                             echo $data->id;
                           ?>
                         </td>
                         

                         <td>
                           <?php
                             echo $data->fecha;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->numDoc_docente;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->nombre;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->apellido;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->valor;
                           ?>
                         </td>
                         <td>
                           <?php
                             echo $data->nombre_rectora;
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
      

      <button type="button" class="btn btn-success" data-toggle='modal' data-target='#exampleModal' id="Actualizar_doc1" data-whatever=" @geetbootstrap" onclick="cargarmodalPDoc('<?php echo $data->id;?>','<?php echo $data->fecha;?>','<?php echo $data->valor;?>','<?php echo $data->nombre;?>','<?php echo $data->apellido;?>','<?php echo $data->numDoc_docente;?>','<?php echo $data->nombre_rectora;?>','<?php echo $data->mes_academico;?>','<?php echo $data->periodo_academico;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>

         <a href="" class="btn btn-warning reportePagoDoc"><img src="<?php echo base_url('assets/img/reporte.png');?>"></a>
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