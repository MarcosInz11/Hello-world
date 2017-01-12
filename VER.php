<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">	
	<title>VER.php</title>
</head>

<body>
<div class="contenidoindex">
<h1 class="animated bounceInDown">Listado de atletas</h1>

<section>
	<nav>
		<a href="index.html" style="font-size: 30px;">Inicio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="add.html" style="font-size: 30px;">Agregar atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="VER.php" style="font-size: 30px;">Ver atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="addDIS.html" style="font-size: 30px;">Agregar Disciplina</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="verDIS.php" style="font-size: 30px;">Ver disciplinas</a>
	</nav>
</section>

<fieldset>
	<table class="animated bounceInDown" width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<th>ID</th>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Origen</th>
		<th>Disciplina</th>
	</tr>
	<?php
//including the database connection file
include("config.php");
$result = mysqli_query($conexion, "SELECT * FROM atletas ORDER BY idATLETA ASC"); 
?>
	
	<?php 

	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['idATLETA']."</td>";
		echo "<td>".$res['nombreATLETA']."</td>";
		echo "<td>".$res['edadATLETA']."</td>";
		echo "<td>".$res['origenATLETA']."</td>";
		echo "<td>".$res['disciplinATLETA']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[idATLETA]\">Editar</a> | <a href=\"delete.php?id=$res[idATLETA]\" onClick=\"return confirm('Are you sure you want to delete?')\">Borrar</a></td>";		
	}
	?>

	</table>
	</fieldset>
	</div>
</body>
</html>
