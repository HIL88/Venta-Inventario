<?php
session_start();

// Redirige al dashboard si el usuario ya inició sesión
if (isset($_SESSION['user_id'])) {
    header("Location: views/dashboard.php");
    exit();
} else {
    // Redirige al formulario de login si el usuario no ha iniciado sesión
    header("Location: auth/login.php");
    exit();
}
?>
