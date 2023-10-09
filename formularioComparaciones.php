<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>maximo</h1>
    <form action="" method="post">
        <label>Numero 1</label>
        <input type="number" name="n1">
        <label>Numero 2</label>
        <input type="number" name="n2">
        <label>Numero 3</label>
        <input type="number" name="n3">
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = (int) $_POST["n1"];
        $n2 = (int) $_POST["n2"];
        $n3 = (int) $_POST["n3"];
        $mayor = $n1;
        if ($n1 == $n2 && $n1 == $n2) {

            echo "<h3>Los numeros son iguales</h3>";
        } else {
            if ($n2 > $mayor) {
                $mayor = $n2;
            }
            if ($n3 > $mayor) {
                $mayor = $n3;
            }
            echo "<h3>" . $mayor . " es el mayor</h3>";
        }

    }
    ?>
</body>

</html>