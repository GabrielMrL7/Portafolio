<?php
// Configuración de la conexión a la base de datos
$host = "localhost";
$user = "root";  // Usuario de MySQL, ajusta si es necesario
$password = "";  // Contraseña, normalmente vacío en XAMPP
$database = "contactoos";  // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
