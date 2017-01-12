<?php
// including the database connection file
include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$origen=$_POST['origen'];
	$disciplina=$_POST['disciplina'];	
	
	// checking empty fields
	if(empty($id) || empty($nombre) || empty($edad) || empty($origen) || empty($disciplina)) {	
		
		/*if(empty($id)) {
			echo "<h1 color='red'>id field is empty.</h1><br/>";
		}
		*/

		if(empty($nombre)) {
			echo "<h1 color='red'>No se introdujo nombre, vuelva atrás.</h1><br/>";
		}
		
		if(empty($edad)) {
			echo "<h1 color='red'>No se introdujo Edad vuelva atrás.</h1><br/>";
		}
		
		if(empty($origen)) {
			echo "<h1 color='red'>No se introdujo Origen vuelva atrás.</h1><br/>";
		}

		if(empty($disciplina)) {
			echo "<h1 color='red'>No se introdujo Disciplina vuelva atrás.</h1><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($conexion, "UPDATE atletas SET nombreATLETA='$nombre',edadATLETA='$edad',origenATLETA='$origen',disciplinATLETA='$disciplina' WHERE idATLETA=$id");
		
		//redirectig 
		header("Location:VER.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conexion, "SELECT * FROM atletas WHERE idATLETA=$id");

while($res = mysqli_fetch_array($result))
{
	$id = $res['idATLETA'];
	$nombre = $res['nombreATLETA'];
	$edad = $res['edadATLETA'];
	$origen = $res['origenATLETA'];
	$disciplina = $res['disciplinATLETA'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

<div class="contenidoindex">
<h1 class="animated bounceInDown">Editar atleta</h1>

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

<section>
	<form class="animated rotateInUpLeft" id="formadd" method="post" action="edit.php">
		<table width="100%" border="0">
			<tr> 
				<td>Nombre -></td>
				<td><input type="text" name="nombre" value=<?php echo $nombre;?>></td>
			</tr>
			<tr> 
				<td>Edad -><p id="parrafo">(Solo numeros)</p></td>
				<td><input type="text" name="edad" value=<?php echo $edad;?>></td>
			</tr>
			<tr> 
				<td>Origen -></td>
				<td><input type="text" name="origen" value=<?php echo $origen;?>></td>
			</tr>
			<tr>
				<td>Disciplina -></td>
				<td><input type="text" name="disciplina" value=<?php echo $disciplina;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td></td>
				<tr>
				<td><input type="submit" name="update" value="Actualizar"></td>
				<td><input type="reset"  value="Cancel"></a></td>
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
