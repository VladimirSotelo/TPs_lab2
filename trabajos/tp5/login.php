<?php
// Datos correctos para el inicio de sesión
$correctUsername = "usuario";
$correctPassword = "admin";

// Obtener los datos ingresados por el usuario
$username = $_POST["username"];
$password = $_POST["password"];

// Validar los datos ingresados
if ($username === $correctUsername && $password === $correctPassword) {
  echo "¡Acceso correcto!";
} else {
  echo "Usuario o contrasenia incorrectos.";
}
?>