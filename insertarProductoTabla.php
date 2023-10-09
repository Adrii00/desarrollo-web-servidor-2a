<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $productos = [
        ["Camel", 5.25, 10],
        ["Chuletitas de cordero", 8, 6],
        ["Helado Kalise", 1.5, 7]
    ];
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_producto = $_POST["nombre_producto"];
        $precio = (float) $_POST["precio"];
        $cantidad = (int) $_POST["cantidad"];

        array_push($productos, [$nombre_producto, $precio, $cantidad]);
        # code...
    }
    ?>
    <form action="" method="post">

        <fieldset>
            <label>Producto</label><br>
            <input type="text" name="nombre_producto"><br><br>
            <label>Precio</label><br>
            <input type="number" step="0.1" name="precio"><br><br>
            <label>Cantidad</label><br>
            <input type="number" step="1" name="cantidad"><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productos as $producto) {
                list($nombre_producto, $precio, $cantidad) = $producto;
                echo "<tr>";
                echo "<td>$nombre_producto</td>";
                echo "<td>$precio</td>";
                echo "<td>$cantidad</td>";
                echo "</tr>";
            }
            ?>


        </tbody>
    </table>
</body>
</body>

</html>