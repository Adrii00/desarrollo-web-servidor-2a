<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora Brutal De Potencias Superpoderosas</h1>
    <form action="" method="post">
        <label>Base</label>
        <input type="number" name="base">
        <label>Exponente</label>
        <input type="number" name="exponente">
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = (int) $_POST["base"];
        $exp = (int) $_POST["exponente"];
        echo "<h3>".$base**$exp."</h3>";
    }
    ?>
</body>
</html>