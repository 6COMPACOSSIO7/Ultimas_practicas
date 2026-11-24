<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Guardar info</title>
</head>
<body>
	<h2>Guardar info. en un archivo</h2>

<?php
	$nombre = "Ana Lopez";
	file_put_contents("Aalumnos.txt", $nombre . PHP_EOL,
		FILE_APPEND);
	echo "Informacion guardada correctamente.";
	echo "<br><br>";
?>

<?php
    echo "<br><br>";
    $nombre = "Laila Cossio";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,
    	FILE_APPEND);
    echo "Alumna agregada correctamente.";
?>

<?php
   echo "<br><br>";
    $contenido = file_put_contents("alumnos.txt");
?>
</body>
</html> 