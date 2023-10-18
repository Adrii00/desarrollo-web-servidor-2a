<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'funciones.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <fieldset >
        <legend><h1>Conversion de divisas</h1></legend>
    <form action="" method="post">
        <label>
            <h3>Cantidad</h3>
        </label>
        <input type="number" step="0.01" name="n">

        <label>
            <h3>Divisa</h3>
        </label>
        <input type="radio" id="E" name="divisa1" value="Euros">
        <label for="E">€</label>
        <input type="radio" id="D" name="divisa1" value="Dólares">
        <label for="D">$</label>
        <input type="radio" id="Y" name="divisa1" value="Yenes">
        <label for="Y">¥</label>

        <label>
            <h3>Conversion</h3>
        </label>
        <input type="radio" id="e" name="divisa2" value="Euros">
        <label for="e">€</label>
        <input type="radio" id="d" name="divisa2" value="Dólares">
        <label for="d">$</label>
        <input type="radio" id="y" name="divisa2" value="Yenes">
        <label for="y">¥</label>
        <input type="hidden" name="action" value="conversion">
        <input type="submit" value="Calcular">
    </form>
    <h2>Resultado</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (($_POST["action"]) == "conversion") {
            $cantidad = (float) $_POST["n"];
            $divisa = $_POST["divisa1"];
            $conversion = $_POST["divisa2"];
            echo "" . $cantidad . " " . $divisa . " son " . cambiarDivisa($cantidad, $divisa, $conversion) . " " . $conversion;
        }
    }
    ?>
    </fieldset>
    
    <fieldset>
        <legend><h1>Algoritmos</h1></legend>
    
    <form action="" method="post">
        <input type="number" step="1" name="num">
        <label>
            <h3>Selecciona algoritmos</h3>
        </label>
        <select name="algoritmo" id="algo">
            <option value="sumatorio" id="suma" selected>Sumatorio</option>
            <option value="factorial" id="fact">Factorial</option>
        </select>
        <input type="hidden" name="action" value="algoritmo">
        <input type="submit" value="Calcular">
    </form>
    <h2>Resultado</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (($_POST["action"]) == "algoritmo") {
            $num = (int) $_POST["num"];
            $algoritmo = $_POST["algoritmo"];
            if ($algoritmo == "factorial") {
                echo "" . factorial($num);
            } else {

                echo "" . sumatorio($num);
            }
        }
    }
    ?>
    </fieldset>
    <fieldset>
        <legend><h1>Animales</h1></legend>
    
    <form action="" method="post">
        <h3>Buscar Especie</h3>
        <label for="anim">Especie: </label>
        <input type="text" name="anim">
        <br><br>
        <input type="hidden" name="action" value="animales">
        <input type="submit" value="Comprobar">
    </form>
    <?php
    $animales = [
        ["Lobo ibérico", "Mamífero", 2500],
        ["Lince ibérico", "Mamífero", 1668],
        ["Quebrantahuesos", "Ave", 2000],
        ["Oso pardo", "Mamífero", 500]
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (($_POST["action"]) == "animales") {
            $especie = $_POST["anim"];
            foreach ($animales as $animal) {
                list($nombre, $tipo, $ejemplares) = $animal;
                if ($especie == $nombre) {
                    echo "El animal " . $especie . " esta " . comprobarEstado($ejemplares);
                }
            }
        }
    }
    ?>

    <?php
    
    ?>
    <h2>Lista de especies</h2>
    <table border="">
        <thead>
            <tr>
                <th>Ejemplar</th>
                <th>Tipo</th>
                <th>Ejemplares</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($animales as $animal) {
                list($nombre, $tipo, $ejemplares) = $animal;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$tipo</td>";
                echo "<td>$ejemplares</td>";
                echo "<td>" . comprobarEstado($ejemplares) . "</td>";
                echo "</tr>";
            }
            ?>


        </tbody>

        </fieldset>

</body>

</html>