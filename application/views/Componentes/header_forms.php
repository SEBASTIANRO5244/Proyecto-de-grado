<html>
<head>
	<title>STUDENTMAT</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/LogoStudent.png');  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/alertify.min.css');  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/estilo.css');  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Rancho&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url('assets/js/librerias/jquery.js');  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/librerias/bootstrap.min.js');  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/librerias/alertify.min.js');  ?>"></script>
</head>

<header>
	<nav class="navbar justify-content-center" style="background-color: #28d; margin-bottom: 40px;">
	<h3 class="alinear_letra1" style="color: white; text-align: center;"><b>SISTEMA DE INFORMACIÓN INTEGRADO DE MATRÍCULAS PARA COLEGIOS PRIVADOS</b></h3> 
		<div class="container-fluid">
			<a class="navbar-brand" href="">
				<a type="button" class="btn btn-light" href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
			</a>
		</div>
		
	</nav>
</header>

<body class="d-flex flex-column">
<?php 
	$current_user = $this->session->all_userdata();
	$tip_user = $current_user['tipo_usu'];
	$id_colegio = $current_user['id_colegio'];
?>

<input readonly class="form-control-plaintext" type="hidden" id="Tip_current_user" value="<?php echo $tip_user; ?>">
<input readonly class="form-control-plaintext"  type="hidden" id="Id_col" value="<?php echo $id_colegio; ?>">


	

