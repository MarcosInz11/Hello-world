<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	$nombre = $_POST['nombre'];
		
	// checking empty fields
	if(empty($nombre)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>Nombre está vacío.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conexion, "INSERT INTO disciplinas(idDIS,nombreDIS) 
		VALUES (null,'$nombre')");
		
		
		header("Location:verDIS.php");
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='verDIS.php'>Ver Resultado</a>";
		//echo "<br/><a href='index.html'>Volver al inicio</a>";
	}
}
?>
</body>
</html>
