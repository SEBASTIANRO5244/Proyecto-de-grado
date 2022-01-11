<center>
<head>
  <img style="width: 40%; height: 30%; margin-left: 30%;" src="assets/img/logoStudent.png">
  <div style="text-align: center;">
    <h1>Reporte estudiantes inactivos</h1>
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
