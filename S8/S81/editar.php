<?php
$palabra=$_GET['palabra'];
print $palabra;
header('index.php');

?>

 <a href="index.php?palabra=<?php echo $palabra ?>">Regresar</a>
