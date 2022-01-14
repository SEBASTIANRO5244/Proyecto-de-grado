<center>
<head>
  <img style="width: 25%; height: 15%; margin-left:-20px;" src="assets/img/logoStudent.png">
  <div style="text-align:center; margin-left:50px; padding:80px; margin-top:-140px">
  <b>  CONSTANCIA DE INFORMACIÓN DE PAGO DE MENSUALIDAD O PENSIÓN DE ESTUDIANTES</b>
</div>
<hr style="margin-top:-50px;">
<p style="margin-top:-30px;">STUDENTMAT, certifica que el pago realizado correspondiente(s) a la cuota (s) de mensualidades o pensiones del estudiante que se detallan a continuación fue realizado SATISFACTORIAMENTE.</p>
<div style="text-align:center;">
  <b>DETALLES DEL PAGO</b>

  <hr style="margin-top:20px;">
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
                             echo $data->fk_id_estudiante;
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
<p>Se entrega constancia por parte de los intersados.</p> 
<footer style="margin-top: 450px">
<p align="center">Firma Acudiente: _________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Firma Administrador: _________________________</p>
</footer>
</center>


