<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $temperaturas = [
        ["Málaga", 20, 27],
        ["Sevilla", 17, 36],
        ["Cádiz", 19, 31],
        ["Jaén", 19, 33],
        ["Granada", 12, 35],
        ["Almería", 20, 27],
        ["Huelva", 16, 33]
    ];
    

    for ($i = 0; $i < count($temperaturas); $i++) {
        array_push($temperaturas[$i], (($temperaturas[$i][1] + $temperaturas[$i][2]) / 2));
    }
    $ciudad = array_column($temperaturas, 0);
    $minima = array_column($temperaturas, 1);
    $maxima = array_column($temperaturas, 2);
    $media = array_column($temperaturas, 3);
    
    array_multisort($minima,SORT_ASC,$ciudad,SORT_ASC,$maxima,SORT_ASC,$media,SORT_ASC,$temperaturas);
        ?>
    <TABLE BORDER>
        <thead>
            <tr>
                <th>Ciudad</th>
                <th>T. Mínima</th>
                <th>T. Máxima</th>
                <th>T. Media</th>
            </tr>

        </thead>
        <tbody>
            <?php
            foreach ($temperaturas as $ciudad) {
                list($nombre, $minima, $maxima, $media) = $ciudad;
                echo "<tr>
                <td>$nombre</td><td>$minima</td><td>$maxima</td><td>$media</td>
                </tr>";
            }
            ?>
            <tr>
                <td colspan="2">Temperatura minima media</td>
                <td colspan="2">
                    <?php
                    $suma = 0;
                    for ($i=0; $i <count($temperaturas); $i++) { 
                        $suma+=$temperaturas[$i][1];
                    }
                    echo"".$suma/count($temperaturas);
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Temperatura maxima media</td>
                <td colspan="2">
                    <?php
                    $suma = 0;
                    for ($i=0; $i <count($temperaturas); $i++) { 
                        $suma+=$temperaturas[$i][2];
                    }
                    echo"".$suma/count($temperaturas);
                    ?>
            </tr>
        </tbody>
    </table>
</body>

</html>