<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Algoritmo</title>
</head>
<link rel="stylesheet" href="estilos.css">
<body>
   <h1>Calcular Ventas y Utilidad del Día</h1>
    <form action="" method="post">
        <label for="desayunos">Cantidad de Desayunos:</label>
        <input type="number" id="desayunos" name="desayunos" required>

        <label for="almuerzos">Cantidad de Almuerzos:</label>
        <input type="number" id="almuerzos" name="almuerzos" required>

        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valores recibidos
    $desayunos = isset($_POST['desayunos']) ? (int)$_POST['desayunos'] : 0;
    $almuerzos = isset($_POST['almuerzos']) ? (int)$_POST['almuerzos'] : 0;

    // Precios de venta
    $precio_desayuno = 4500;
    $precio_almuerzo = 6800;

    // Costos de producción
    $costo_desayuno = 1850;
    $costo_almuerzo = 3800;

    // Cálculos
    $total_ventas = ($desayunos * $precio_desayuno) + ($almuerzos * $precio_almuerzo);
    $ganancia = ($desayunos * ($precio_desayuno - $costo_desayuno)) + 
                ($almuerzos * ($precio_almuerzo - $costo_almuerzo));

    // Mostrar resultados
    echo "<div class='resultado'>";
    echo "<h2>Total de ventas: $" . number_format($total_ventas, 2) . "</h2>";
    echo "<h2>Ganancia del día: $" . number_format($ganancia, 2) . "</h2>";

    if ($ganancia > 300000) {
        echo "<p class='rojo'>Debe reinvertir</p>";
    } else {
        echo "<p class='verde'>No debe reinvertir</p>";
    }
    echo "</div>";
}
?>

<footer>
    <p>&copy; 2024 Restaurant Algoritmo. Todos los derechos reservados.</p>
</footer>

</body>
</html>