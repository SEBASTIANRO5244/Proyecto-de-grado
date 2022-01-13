<center>
<head>
  <img style="width: 40%; height: 30%; margin-left: 30%;" src="assets/img/logoStudent.png">
  <div style="text-align: center;">
    <h1>Constancia de pago</h1>
  </div>
</head>
<br>
<table class="table" >
  <thead class="thead">
    <tr>

      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Fecha</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Matricula</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombres Est.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellidos Est.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombres Acu.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellidos Acu.</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Periodo</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Mes Academico</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Valor</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Adminastrador</th>

    </tr>
  </thead>
  <tbody style="background-color: white">
     <tr>
                   <?php

                     if(!empty($pension)){
                       foreach ($pension as $data ) {      
                   ?>
                       <tr>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fecha;
                           ?>
                           </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fk_id_matricula;
                           ?>
                         </td>
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
                             echo $data->nombre_acudiente;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->apellido_acudiente;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->periodo_academico;
                           ?>
                         </td>
                          <td style="text-align:center;">
                           <?php
                             echo $data->mes_academico;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->valor;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->nombre_admin;
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
<hr>
<footer style="margin-top: 550px">
<p align="center">Firma Acudiente: _________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Firma Administrador: _________________________</p>
</footer>
</center>


