
<center>
<head>
  <div>
    <img style="margin-left: 80px" src="assets/img/escudo_reportes.png">
<p align="center" style=" margin-left:15%; margin-top: -120px;">Centro Educativo Crecer De Soledad <br> EDUCACIÓN PRE-ESCOLAR, BÁSICA PRIMARIA
<br> Código DANE: 308758003986 <br> Resolución No. 0706 De Nov. Del 2006 <br> Dirección Calle. 65 No. 21-57 Terranova 1 <br> Soledad – Atlántico <br>crecerdesoledad@hotamail.com</p>
  </div>
    <div style="text-align: center;">
    <h1>Reporte cursos</h1>
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