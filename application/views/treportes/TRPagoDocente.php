<center>
<head>
  <img style="width: 25%; height: 15%; margin-left:-20px;" src="assets/img/logoStudent.png">
  <div style="text-align:center; margin-left:50px; padding:80px; margin-top:-140px">
  <b>  CONSTANCIA DE INFORMACIÓN DE PAGO DE NÓMINA O CONTRATO LABORAL</b>
</div>
<hr style="margin-top:-50px;">
<p style="margin-top:-70px;">STUDENTMAT, certifica que el pago realizado correspondiente(s) a la cuota (s) de nómina o contrato laboral del docente que se detallan a continuación fue realizado SATISFACTORIAMENTE.</p>
<div style="text-align:center;">
  <b>DETALLES DEL PAGO</b>

  <hr style="margin-top:20px;">
</div>

</head>
<table class="table">
  <thead class="thead">
    <tr>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Fecha</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Documento docente</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nombre</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Apellido</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Periodo</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Mes Academico</th>
      <th style="text-align:center; padding:15px; background-color:#4C9ED9; color:#fff" scope="col">Nómina</th>
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
<p>Se entrega constancia por parte de los intersados.</p> 
<footer style="margin-top: 450px">
<p align="center">Firma Docente: _________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Firma Rectora: _________________________</p>
</footer>
</center>