<center>
<head>
  <img style="width: 40%; height: 30%; margin-left: 30%;" src="assets/img/logoStudent.png">
  <div style="text-align: center;">
    <h1>Constancia de pago</h1>
  </div>
</head>
<table class="table">
  <thead class="thead">
    <tr>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Fecha</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Documento docente</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombre</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellido</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Valor</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Rectora</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
    <tr>
                   <?php

                     if(!empty($pago_docente)){
                       foreach ($pago_docente as $data ) {      
                   ?>
                       <tr>
                         <td style="text-align:center;">
                           <?php
                             echo $data->fecha;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->numDoc_docente;
                           ?>
                         </td>
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
                             echo $data->valor;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->nombre_rectora;
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
<p align="center">Firma Docente: _________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Firma Rectora: _________________________</p>
</footer>
</center>