<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de alumnos</title>
</head>
<body>
	<h2>Registro de alumnos de 3°A Programacion</h2>
	<form method="POST">
		nombre del alumno:
		<input type="text" name="nombre">
		<br><br>
		<button type="submit" name="nombre">Guardar</button>
	</form>
	<?php
	if (isset($_POST["guardar"])) {
		$nombre = $_POST["nombre"];
		file_put_contents("ProgramacionA.txt", $nombre. PHP_EOL, FILE_APPEND);
		echo "<P>Nombre guardado correctamente.</p>";}
	?>
	<h3>Lista ded alumnos de 3°A registrados</h3>
	<?php
	if (file_exists("ProgramacionA.txt")) {
		$contenido = file_exists("ProgramacionAtxt");
	}
?>
</body>
</html>