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
<h1 class="animated bounceInDown">Listado de disciplinas</h1>

<section>
	<nav>
		<a href="index.html" style="font-size: 30px;">Inicio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="add.html" style="font-size: 30px;">Agregar atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="VER.php" style="font-size: 30px;">Ver atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="addDIS.html" style="font-size: 30px;">Agregar Disciplina</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="verDIS.php" style="font-size: 30px;">Ver disciplinas</a>
	</nav>
</section>
<div class="row">

<fieldset class="animated bounceInDown">
	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<th>ID</th>
		<th>Nombre disciplina</th>
	</tr>
	<?php
//including the database connection file
include("config.php");
$result = mysqli_query($conexion, "SELECT * FROM disciplinas ORDER BY idDIS ASC"); 
?>
	
	<?php 

	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['idDIS']."</td>";
		echo "<td>".$res['nombreDIS']."</td>";	
		echo "<td><a href=\"editDIS.php?id=$res[idDIS]\">Editar</a> | <a href=\"deleteDIS.php?id=$res[idDIS]\" onClick=\"return confirm('Are you sure you want to delete?')\">Borrar</a></td>";		
	}
	?>

	</table>
	</fieldset>
</body>
</html>
