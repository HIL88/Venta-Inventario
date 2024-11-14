<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] == 'dueño' || $_SESSION['role'] == 'bodega') {
    include 'db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Procesar adiciones o actualizaciones de inventario
    }

    // Mostrar inventario
    $stmt = $pdo->query("SELECT * FROM productos");
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
</head>
<body>
    <h2>Inventario</h2>
    <form action="inventario.php" method="POST">
        <label>Producto:</label><br>
        <input type="text" name="producto" required><br>
        
        <label>Cantidad inicial:</label><br>
        <input type="number" name="inicial" required><br>
        
        <label>Nuevo ingreso:</label><br>
        <input type="number" name="nuevo_ingreso" required><br>
        
        <button type="submit">Agregar</button>
    </form>
    
    <h3>Productos en Inventario</h3>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad Inicial</th>
            <th>Nuevo Ingreso</th>
            <th>Stock</th>
            <th>Existencia</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                <td><?php echo htmlspecialchars($producto['inicial']); ?></td>
                <td><?php echo htmlspecialchars($producto['nuevo_ingreso']); ?></td>
                <td><?php echo htmlspecialchars($producto['stock']); ?></td>
                <td><?php echo htmlspecialchars($producto['existencia']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
