<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'contactoos';
$username = 'root';
$password = '';

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST['gmail'];
    $telefono = $_POST['telefono'];

    // Preparar y vincular
    $stmt = $conn->prepare("INSERT INTO users (gmail, telefono) VALUES (?, ?)");
    $stmt->bind_param("ss", $gmail, $telefono);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Datos registrados exitosamente.";
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    // Cerrar declaración
    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>
