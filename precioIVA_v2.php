<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'precioIVA.php'; ?>
</head>

<body>
    <form action="" method="post">
        <label>Precio</label>
        <input type="number" name="precio">
        <label>Tipo de IVA</label>
        <select name="tipo">
            <option value="SINIVA">Sin Iva</option>
            <option value="GENERAL" selected>General</option>
            <option value="REDUCIDO">Reducido</option>
            <option value="SUPERREDUCIDO">Super reducido</option>

            <input type="submit" value="Calcular">
        </select>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["action"] == "iva") {
                $precio = (float) $_POST["precio "];
                $iva = $_POST["iva"];
                echo precioConIva($precio, $iva);
            }
            }
        ?>
        
    
    </form>

    <h2>Formulario IRPF</h2>

    <form action=""method="post">
        <label>Salario: </label>
        <input type="number" step="1000" name="salario"><br><br>
        <input type="hidden" name="action"value="irpf">
        <input type="submit" value="Calcular">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_POST["action"]=="irpf") {
        $salario = (float) $_POST["salario"];
        echo salarioSinIRPF($salario);
        
    }
}
    ?>
</body>

</html>