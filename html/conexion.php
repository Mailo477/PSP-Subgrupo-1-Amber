<?php
$servername = "localhost"; // Cambia si es necesario
$username = "root";   // Tu usuario de la base de datos
$password = ""; // Tu contraseña de la base de datos
$dbname = "dbalertaamber"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
