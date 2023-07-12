<!DOCTYPE html>
<html>
<head>
    <title>Recibe</title>
</head>
<body>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $signo = $_POST['signo'];

    switch ($signo) {
        case '+':
            $resultado = $numero1 + $numero2;
            echo "La suma de $numero1 y $numero2 es: $resultado";
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            echo "La resta de $numero1 y $numero2 es: $resultado";
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            echo "La multiplicación de $numero1 y $numero2 es: $resultado";
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "La división de $numero1 y $numero2 es: $resultado";
            } else {
                echo "Error: No se puede dividir entre cero.";
            }
            break;
        default:
            echo "Error: Signo inválido.";
            break;
    }
    ?>
</body>
</html>