<!DOCTYPE html>
<html>
<head>
	<title>calculo</title>
</head>
<body>
	<center>
	
	<?php
	$numero = $_POST['numero'];
	$factorial=1;
	
	if ($numero == ''){
		echo "Ingrese un numero para calcular";
	}elseif($numero == 0 || $numero == 1) {
    	echo "El factorial de $numero es: $factorial";
 		}else {
    		for ($i = 2; $i <= $numero; $i++) {		
      			$factorial *=  $i;
    		}
    		echo "El factorial de $numero es: $factorial";
    	}
	?>
	</center>
</body>
</html>