<center>
<head>
  <img style="width: 40%; height: 30%; margin-left: 30%;" src="assets/img/logoStudent.png">
  <div style="text-align: center;">
    <h1>Reporte estudiantes matriculados</h1>
  </div>
</head>
<table class="table" style="margin: auto;">
  <thead class="thead">
    <tr>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombre Est.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellidos Est.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">N.I Est.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Grado</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Fecha</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Estado</th>

    </tr>
  </thead>
  <tbody style="background-color: white">
      <tr>
                   <?php

                     if(!empty($matricula)){
                       foreach ($matricula as $data ) {      
                   ?>
                       <tr>
                         <td style="text-align:center;">
                           <?php
                             echo $data->nombre_estudiante;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->apellido_estudiante;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fk_numero_documento_estudiante;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fk_id_curso;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fecha;
                           ?>
                         </td>
                       
                         <td style="text-align:center;">
                           <?php
                             echo $data->estado;
                           ?>
                         </td>
                          
                       </tr>
                  <?php
                       }
                    }
                   ?>    
                  
                 </tr>
  </tbody>
</table>
</center>