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
    const tam =10;
    $aBidi = [];
    $array1= [];
    $array2=[];
    for ($i=0; $i <tam ; $i++) { 
        $array1[$i]=rand(1,10);
        $array2[$i]=rand(10,100);
    }
    array_push($aBidi,$array1);
    array_push($aBidi,$array2);

    ?>
    <table>
        <thead>
            <tr>
                <td>Array 1</td>
                <td>Array 2</td>
            </tr>
        </thead>
        <tbody>
    <?php
    for ($i=0; $i <count($array1) ; $i++) { 
           echo"<tr>";
           for ($j=0; $j <count($aBidi) ; $j++) { 
            echo"<td>".$aBidi[$j][$i]."</td>";
           }
           echo"</tr>";
    }

    

    ?>

<table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Máximo</td>
                <td>Mínimo</td>
                <td>Media</td>
            </tr>
        </thead>
        <tbody>
    <?php

    for ($i=0; $i <count($aBidi) ; $i++) { 
        $maximo = $aBidi[$i][0]; 
        $minimo = $aBidi[$i][0];
        $suma=0;
        for ($j = 0; $j < count($aBidi[$i]); $j++){
        $suma+=$aBidi[$i][$j];
        if ($maximo < $aBidi[$i][$j])
            $maximo = $aBidi[$i][$j];
        if ($minimo > $aBidi[$i][$j])
            $minimo = $aBidi[$i][$j];
    }
        echo"<tr><td>Array ".($i+1)."</td><td>".$maximo."</td><td>".$minimo."</td><td>".($suma/count($aBidi[$i]))."</td></tr>";
    }
    

    ?>
    </tbody>
    </table>

    </tbody>
    </table>
</body>
</html>