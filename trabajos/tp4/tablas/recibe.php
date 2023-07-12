<!DOCTYPE html>
<html>
<head>
	<title>Tablas de Multiplicar</title>
</head>
<body>
	<?php
	$numero = $_POST['Numero'];
	$resultado=0;
	
	echo "Tabla con (For).<br>";
	for($i=1;$i<=10;$i++){
		$resultado = $numero*$i;
		echo "$numero x $i = $resultado <br>";
	}
	
	echo "Tabla con (While).<br>";
	$i=1;
	while ($i <= 10) {
		$resultado = $numero * $i;
		echo "$numero x $i = $resultado<br>";
		$i++;
	}

	echo "Tabla con (Do While).<br>";
	$i=0;
	do {
		$i++;
		$resultado = $numero * $i;
		echo "$numero x $i = $resultado<br>";
	} while ($i <= 9);
	?>
</body>
</html>