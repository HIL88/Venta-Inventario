<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php if ($role == 'dueño' || $role == 'bodega'): ?>
        <a href="inventario.php">Inventario</a><br>
    <?php endif; ?>
    <?php if ($role == 'dueño'): ?>
        <a href="ventas.php">Ventas</a><br>
    <?php endif; ?>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
