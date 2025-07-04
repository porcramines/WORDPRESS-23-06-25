<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> editar eliminar buscar insertar extraer </title>
<style type="text/css">
	table,td,tr{
		border: 1px solid green;
	}
</style>
</head>
<body>
<?php
if ( isset($_GET['palabra'])) {
	 print $_GET['palabra']; 
	 $palabra=$_GET['palabra'];
}
else{
	
	$palabra="hoy es lunes en Tacna";
	print $palabra;
}

?>	

<form>
<table>
	<tr>
		<td>PALABRA</td>
		<td>EDITAR</td>
		<td>ELIMINAR</td>
		<td>BUSCAR</td>
		<td>INSERTAR</td>
		<td>EXTRAER</td>
	</tr>
	<tr>
		<td><?php print $palabra ?></td>
		<td>
			<a href="feditar.php?palabra=<?php echo $palabra?>">Editar</a>
		</td>
		<td>
			<a href="feliminar.php?palabra=<?php echo $palabra?>">Eliminar</a>
		</td>
		<td>
			<a href="fbuscar.php?palabra=<?php echo $palabra ?>">buscar</a>
		</td>
		<td>
	      	<a href="finsertar.php?palabra=<?php echo $palabra ?>">insertar</a>
		</td>
		<td>
			<a href="fextraer.php?palabra=<?php echo $palabra ?>">extraer</a>
		</td>
	</tr>
</table>
	
</form>
</body>
</html>