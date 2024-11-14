<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="auth.php" method="POST">
        <label>Usuario:</label><br>
        <input type="text" name="username" required><br>
        
        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br>
        
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
