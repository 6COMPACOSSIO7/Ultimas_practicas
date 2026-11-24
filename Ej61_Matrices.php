<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej61 - Matrices</title>
    <style>
        table { border-collapse: collapse; margin: 10px; display: inline-block; }
        td, th { border: 1px solid black; padding: 10px; text-align: center; }
        h2 { display: inline-block; margin-right: 20px; }
    </style>
</head>
<body>
    <h1>Ejercicio 61 - Matrices</h1>

    <?php
    // Matriz A: de 10 en 10 iniciando en 100
    // Matriz B: de 20 en 20 iniciando en 500
    // Matriz C: suma de A + B en el mismo índice

    $matrizA = [];
    $matrizB = [];
    $matrizC = [];

    $valorA = 100;
    $valorB = 500;

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matrizA[$i][$j] = $valorA;
            $matrizB[$i][$j] = $valorB;
            $matrizC[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];

            $valorA += 10;
            $valorB += 20;
        }
    }

    // Función para mostrar una matriz
    function mostrarMatriz($matriz, $titulo) {
        echo "<h2>$titulo</h2>";
        echo "<table>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    mostrarMatriz($matrizA, "MatrizA");
    mostrarMatriz($matrizB, "MatrizB");
    mostrarMatriz($matrizC, "MatrizC");
    ?>

</body>
</html>