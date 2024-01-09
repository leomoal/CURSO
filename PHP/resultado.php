<?php include 'headDos.html';

//RECIBIENDO DATOS DE INDEX.PHP
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//MOSTRANDO DATOS
echo "<p>El nombre registrado fue: $nombre </p>";
echo "<p>La edad registrado fue: $edad </p>";
echo "<p>El correo registrado fue: $correo </p>";
echo "<p>La contraseña registrado fue: $contraseña </p>";
echo "<a href= 'index.php'> Back </a>"


?>