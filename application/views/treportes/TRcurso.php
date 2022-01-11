<center>
<head>
  <img style="width: 40%; height: 30%; margin-left: 30%;" src="assets/img/logoStudent.png">
  <div style="text-align: center;">
    <h1>Reporte cursos activos</h1>
  </div>
</head>

<table class="table" style="width: 100%; margin: auto;">
  <thead class="thead">
    <tr>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Id</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($curso)){
                       foreach ($curso as $data ) {      
                   ?>
                       <tr>
                         <td style="text-align:center;">
                           <?php
                             echo $data->id;
                           ?>
                         </td>
                         <td style="text-align:center;">

                           <?php
                             echo $data->nombre;
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