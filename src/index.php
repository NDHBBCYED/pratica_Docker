<?php
$servername = "db";
$username = "root";
$password = getenv('MYSQL_ROOT_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";
?>
