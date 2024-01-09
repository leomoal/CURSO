<?php 
include 'head.html';
?>
<form action="resultado.php" method="post">
    <input type="text" id="nombre" name="nombre" placeholder="Introducir el nombre: " required>
    <input type="number" id="edad" name="edad" placeholder="Introducir la edad: " required>
    <input type="email" id="correo" name="correo" placeholder="Introducir el correo: " required>
    <input type="password" id="contraseña" name="contraseña" placeholder="Introducir contraseña: " required>
    <input type="submit" value="ENVIAR">
</form>
