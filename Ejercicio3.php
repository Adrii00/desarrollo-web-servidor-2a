<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    <table>
        <thead>
            <tr>
                <td>Cuadrado Perfecto</td>
                <td>Raiz Cuadrada</td>
            </tr>
        </thead>
        <tbody>
    <?php
    $cuadrados=[];
    for ($i=1; $i <=50 ; $i++) { 
        $cuadrados[$i]=$i*$i;
        echo"<tr><td>".$cuadrados[$i]."</td><td>".$i."</td></tr>";    
    }

    ?>
    </tbody>
    </table>
</body>
</html>