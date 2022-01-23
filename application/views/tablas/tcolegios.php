<div class="scrollbar scrollbar-primary" id="scrollbarestu">
  <div class="force-overflow"></div>
<table class="table" style="width: 100%; margin: auto;">

  <thead class="thead">
    <tr>
      <th scope="col" style="display:none">Id</th>
      <th scope="col">DANE</th>
      <th scope="col">Nombre Colegio</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($colegios)){
                       foreach ($colegios->result() as $data ) {      
                   ?>
                       <tr>
                         <th scope="row" style="display:none">
                           <?php
                             echo $data->id_colegio;
                           ?>
                         </th>
                         <th scope="row">
                           <?php
                             echo $data->dane_colegio;
                           ?>
                         </th>
                         <th>
                           <?php
                             echo $data->nombre_colegio;
                           ?>
                         </th>
                          
                          <td>
      <button type="button" class="btn btn-success" id="Actualizar_colegio1" data-toggle='modal' data-target='#exampleModal' data-whatever=" @geetbootstrap"  onclick="cargarmodalcolegios('<?php echo $data->id_colegio;?>','<?php echo $data->nombre_colegio;?>','<?php echo $data->dane_colegio;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
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
