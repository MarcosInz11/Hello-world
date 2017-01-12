<?php
// including the database connection file
include("config.php");

if(isset($_POST['update']))
{	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];	
	
	// checking empty fields
	if(empty($id) || empty($nombre)) {	

		if(empty($id)) {
			//echo "<font color='red'>id.</font><br/>";
		}

		if(empty($nombre)) {
			echo "<h1 color='red'>Nombre está vacío vuelva atrás e introduzca nombre.</h1><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($conexion, "UPDATE disciplinas SET nombreDIS='$nombre', idDIS='$id' WHERE idDIS=$id");
		
		//redirectig to the display page.
		header("Location: verDIS.php");
	}
}
?>
<?php
//getting id 
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conexion, "SELECT * FROM disciplinas WHERE idDIS=$id");

while($res = mysqli_fetch_array($result))
{
	$id = $res['idDIS'];
	$nombre = $res['nombreDIS'];
}
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<div class="contenidoindex">
<h1 class="animated bounceInDown">Editar disciplina</h1>

<fieldset>
<section>
	<section>
	<nav>
		<a href="index.html" style="font-size: 30px;">Inicio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="add.html" style="font-size: 30px;">Agregar atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="VER.php" style="font-size: 30px;">Ver atletas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="addDIS.html" style="font-size: 30px;">Agregar Disciplina</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="verDIS.php" style="font-size: 30px;">Ver disciplinas</a>
	</nav>
</section>
<section class=" animated rotateInDownRight">
	<form id="formadd" method="post" action="editDIS.php">

		<table width="100%" border="0">
			<tr> 
				<td>Nombre -></td>
				<td><input type="text" name="nombre" value=<?php echo $nombre;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td></td><td></td>
				<tr>
				<td><input type="submit" name="update" value="Actualizar"></td>
				<td><input type="reset" value="cancelar"></td>
				</tr>
			</tr>
		</table>
		</form>
	</section>

</section>
	</fieldset>
	</div>
</body>
</html>
