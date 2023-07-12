<!DOCTYPE html>
<html>
<head>
    <title>Recibe</title>
</head>
<body>
    <?php
    echo "El producto elegido es: ".$_GET['producto']."<br><br>";
    echo "Características principales: ".$_GET['caracteristicas']."<br><br>";
    echo "Su precio es: ".$_GET['precio']."<br><br>";
    echo '<img src="'.$_GET['imagen'].'.jpg" alt="Imagen del producto">';
    ?>
</body>
</html>