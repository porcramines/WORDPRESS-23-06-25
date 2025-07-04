<?php
$palabra=$_GET['palabra'];

print $palabra;
?>

<form action="editar.php" method="GET">
	<label>palabra</label>
	<label > <?php echo $palabra?></label>
	<input type="text" name="palabra" id="palabra">
	<button type="submit">Editar</button>

</form>