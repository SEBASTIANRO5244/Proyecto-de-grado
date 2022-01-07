<div class="scrollbar scrollbar-primary">
  <div class="force-overflow"></div>
<table class="table" style="width: 100%; margin: auto;">

  <thead class="thead">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($curso)){
                       foreach ($curso->result() as $data ) {      
                   ?>
                       <tr>
                         <th scope="row">
                           <?php
                             echo $data->id;
                           ?>
                         <td>
                           <?php
                             echo $data->nombre;
                           ?>
                         </td>
                          <td>
      

      <button type="button" class="btn btn-success" id="Actualizar_curso1" data-toggle='modal' data-target='#exampleModal' data-whatever=" @geetbootstrap"  onclick="cargarmodalcurso('<?php echo $data->nombre;?>','<?php echo $data->id;?>')"><img src="<?php echo base_url('assets/img/actualizar.png');?>"><br><b class="letter"></button>
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
