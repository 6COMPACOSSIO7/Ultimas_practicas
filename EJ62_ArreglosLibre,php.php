<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej62 - Arreglos Libre</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; }
        table { border-collapse: collapse; background: white; margin: 10px 0; }
        td, th { border: 1px solid black; padding: 8px; text-align: center; }
        th { background: #333; color: white; }
        h1 { color: #1a73e8; }
    </style>
</head>
<body>
    <h1>Ej62 - Tienda de Videojuegos</h1>
    <h3>Arreglos Unidimensionales y Multidimensionales</h3>

    <?php
    // 1. ARREGLO UNIDIMENSIONAL (Vector) - Productos y precios
    $productos = ["PlayStation 5", "Xbox Series X", "Nintendo Switch", "Control PS5"];
    $precios   = [10999, 9999, 7499, 1499];

    echo "<h2>1. Productos (Vector Unidimensional)</h2>";
    echo "<table><tr><th>Producto</th><th>Precio</th></tr>";
    for ($i = 0; $i < count($productos); $i++) {
        echo "<tr><td>$productos[$i]</td><td>\$$precios[$i]</td></tr>";
    }
    echo "</table>";

    // 2. ARREGLO MULTIDIMENSIONAL (Matriz) - Ventas por día
    // Filas = Productos, Columnas = Lunes, Martes, Miércoles
    $ventas = [
        [2, 1, 3], // PS5
        [1, 2, 1], // Xbox
        [3, 2, 2], // Switch
        [5, 4, 6], // Control
    ];
    $dias = ["Lunes", "Martes", "Miércoles"];

    echo "<h2>2. Ventas por Día (Matriz Multidimensional)</h2>";
    echo "<table><tr><th>Producto</th>";
    foreach ($dias as $dia) {
        echo "<th>$dia</th>";
    }
    echo "<th>Total Vendido</th><th>Total en $</th></tr>";

    $granTotal = 0;

    for ($i = 0; $i < 4; $i++) {
        $totalCant = 0;
        echo "<tr><td><b>$productos[$i]</b></td>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>" . $ventas[$i][$j] . "</td>";
            $totalCant += $ventas[$i][$j];
        }
        $totalDinero = $totalCant * $precios[$i];
        $granTotal += $totalDinero;
        echo "<td><b>$totalCant</b></td><td><b>\$$totalDinero</b></td></tr>";
    }
    echo "</table>";

    echo "<h2>💰 Ganancia total de la semana: \$$granTotal</h2>";

    // 3. Extra: Producto más vendido
    $mayor = 0;
    $indiceMayor = 0;
    for ($i = 0; $i < 4; $i++) {
        $suma = array_sum($ventas[$i]);
        if ($suma > $mayor) {
            $mayor = $suma;
            $indiceMayor = $i;
        }
    }
    echo "<p><b>Producto más vendido:</b> $productos[$indiceMayor] con $mayor unidades.</p>";
    ?>

</body>
</html>