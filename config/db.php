<?php
$host = 'localhost';
$dbname = 'nombre_de_tu_base_de_datos';
$username = 'root'; // Cambia según tu configuración
$password = ''; // Cambia según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
