<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$origen = $_POST['origen'];
	$disciplina = $_POST['disciplina'];
		
	// checking empty fields
	if(empty($nombre) || empty($edad) || empty($origen) || empty($disciplina)) {

		/*if(empty($id)) {
			echo "<h1 color='red'>No introdujo id nuevo, volver atrás.</h1><br/>";
		}*/
				

		if(empty($nombre)) {
			echo "<font color='red'>No introdujo nombre, volver atrás.</font><br/>";
		}
		
		if(empty($edad)) {
			echo "<font color='red'>No introdujo edad, volver atrás</font><br/>";
		}
		
		if(empty($origen)) {
			echo "<font color='red'>No introdujo origen, volver atrás.</font><br/>";
		}
		
		if(empty($disciplina)) {
			echo "<font color='red'>No introdujo disciplina, volver atrás.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conexion, "INSERT INTO atletas(idATLETA,nombreATLETA,edadATLETA,origenATLETA,disciplinATLETA) 
		VALUES (null,'$nombre',$edad,'$origen','$disciplina')" );
		
		header("Location:VER.php");
		
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='VER.php'>Ver resultado</a>";
		//echo "<br/><a href='index.html'>Volver al inicio</a>";
	}
}
?>
</body>
</html>
