<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] == 'dueño') {
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Procesar registro de ventas
    }

    $stmt = $pdo->query("SELECT * FROM ventas");
    $ventas = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas</title>
</head>
<body>
    <h2>Registrar Venta</h2>
    <form action="ventas.php" method="POST">
        <label>Producto:</label><br>
        <select name="producto_id">
            <?php
            $stmt = $pdo->query("SELECT id, nombre FROM productos");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
            }
            ?>
        </select><br>
        
        <label>Precio de Venta:</label><br>
        <input type="number" name="precio_venta" required><br>
        
        <button type="submit">Registrar Venta</button>
    </form>

    <h3>Historial de Ventas</h3>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio de Venta</th>
            <th>Ganancia</th>
        </tr>
        <?php foreach ($ventas as $venta): ?>
            <tr>
                <td><?php echo htmlspecialchars($venta['producto_id']); ?></td>
                <td><?php echo htmlspecialchars($venta['precio_venta']); ?></td>
                <td><?php echo htmlspecialchars($venta['ganancia']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
