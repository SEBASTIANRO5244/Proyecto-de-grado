<center>
<head>
  <img style="width: 25%; height: 15%; margin-left:-20px;" src="assets/img/logoStudent.png">
  <div style="text-align:center; margin-left:50px; padding:80px; margin-top:-160px">
  <h2><b>  CONSTANCIA DE CURSOS VIGENTES</b></h2>
</div>
<hr style="margin-top:-40px;">
<p style=" text-align: center; margin-top: -45px;">STUDENTMAT, certifica que los cursos o grados correspondiente(s) a esta constancia hacen referencia o mencion a las aulas de clases disponibles para los estudiantes que se encuentran matriculados y/o próximos a matricular.</p>
<div style="text-align:center;">
  <b>DETALLES DE CURSOS VIGENTES</b>

  <hr style="margin-top:20px;">
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