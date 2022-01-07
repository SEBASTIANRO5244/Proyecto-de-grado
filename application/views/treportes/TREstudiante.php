<center>
<head>
  <div>
    <img style="margin-left: 80px" src="assets/img/escudo_reportes.png">
<p align="center" style=" margin-left:15%; margin-top: -120px;">Centro Educativo Crecer De Soledad <br> EDUCACIÓN PRE-ESCOLAR, BÁSICA PRIMARIA
<br> Código DANE: 308758003986 <br> Resolución No. 0706 De Nov. Del 2006 <br> Dirección Calle. 65 No. 21-57 Terranova 1 <br> Soledad – Atlántico <br>crecerdesoledad@hotamail.com</p>
  </div>
  <div style="text-align: center;">
    <h1>Reporte Estudiantes Inactivos</h1>
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
