<center>
<head>
  <img style="width: 25%; height: 15%; margin-left:-20px;" src="assets/img/logoStudent.png">
  <div style="text-align:center; margin-left:50px; padding:80px; margin-top:-160px">
  <h2><b>  CONSTANCIA DE ESTUDIANTES</b></h2>
</div>
<hr style="margin-top:-40px;">
<p style=" text-align: center; margin-top: -45px;">STUDENTMAT, certifica que los estudiantes en mención se encuentran matriculados y/o próximos a matricular.</p>
<div style="text-align:center;">
  <b>DETALLES DE ESTUDIENTES</b>

  <hr style="margin-top:20px;">
</div>

</head>
<table class="table">
  <thead class="thead">
    <tr>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombres</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellidos</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Numero Identificación</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Tipo Identificación</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Estado</th>

    </tr>
  </thead>
  <tbody style="background-color: white">

       <tr>
                   <?php

                     if(!empty($estudiante)){
                       foreach ($estudiante as $data ) {      
                   ?>
                       <tr>
                         <td style="text-align:center;">
                           <?php
                             echo $data->nombre;
                           ?>
                           </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->apellido;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->numero_documento;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->tipo_documento;
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
