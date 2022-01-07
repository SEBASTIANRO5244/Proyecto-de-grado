<center>
<head>
  <div>
    <img style="margin-left: 80px" src="assets/img/escudo_reportes.png">
<p align="center" style=" margin-left:15%; margin-top: -120px;">Centro Educativo Crecer De Soledad <br> EDUCACIÓN PRE-ESCOLAR, BÁSICA PRIMARIA
<br> Código DANE: 308758003986 <br> Resolución No. 0706 De Nov. Del 2006 <br> Dirección Calle. 65 No. 21-57 Terranova 1 <br> Soledad – Atlántico <br>crecerdesoledad@hotamail.com</p>
  </div>
  <div style="text-align: center;">
    <h1>Reporte Pago</h1>
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
                             echo $data->nombre_docente;
                           ?>
                         </td>
                         <td style="text-align:center;">
                           <?php
                             echo $data->apellido_docente;
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
<footer style="margin-top: 600px">
<p align="center">Firma Docente: _________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Firma Rectora: _________________________</p>
</footer>
</center>