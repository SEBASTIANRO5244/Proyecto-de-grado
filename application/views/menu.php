<nav class="navbar justify-content-center" style="background-color: #28d; margin-bottom: 40px;">
    <h3 class="alinear_letra1" style="color: white; text-align: center;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
</nav>

<div class="contenedor-menu">

<button  onclick="estudiante()" class="botonmenu2" type="Submit"> <b class="letter">Estudiantes</b> <img class="estudiante" src="<?php echo base_url('assets/img/estudiante.png');?>"></button> 

<button onclick="acudiente()" class="botonmenu2" type="Submit"> <b class="letter">Acudientes</b> <img class="acudiente" src="<?php echo base_url('assets/img/padre.png');?>"></button> 

<button onclick="curso()" class="botonmenu2" type="Submit"> <b class="letter">Cursos</b> <img class="curso" src="<?php echo base_url('assets/img/cursos.png');?>"></button> 

<button onclick="matricula()" class="botonmenu2" type="Submit"> <b class="letter">Matricula</b> <img class="matricula" src="<?php echo base_url('assets/img/matricula.png');?>"></button> 

<button onclick="docente()" class="botonmenu2" type="Submit"> <b class="letter">Docentes</b> <img class="docentes" src="<?php echo base_url('assets/img/docentes.png');?>"></button> 

<button onclick="pago_estudiante()" class="botonmenu2" type="Submit"> <b class="letter">Pago Estudiantes</b> <img class="p_estudiante" src="<?php echo base_url('assets/img/icono.png');?>"></button> 

<button onclick="pago_docente()" class="botonmenu2" type="Submit"> <b class="letter">Pago Docentes</b> <img class="p_docentes" src="<?php echo base_url('assets/img/pago.png');?>"></button>

<button onclick="usuarios()" class="botonmenu2" type="Submit"> <b class="letter">Usuarios</b> <img class="registro_login" src="<?php echo base_url('assets/img/usuario.png');?>"></button> 

<button  class="botonmenu2" href="" id="cerrarSession"> <b class="letter">Cerrar Sesión</b> <img style="height: 112px;" src="<?php echo base_url('assets/img/salir.png');?>"></button> 
</div>