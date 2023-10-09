<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*echo "hola mundo";
    echo "<br><br>";
    $string1 = "Hola";
    $string2 = 'Hola';
    echo "Texto: $string1";
    echo "<br>";
    echo $string1." ".$string2;
    echo "<br>";
    echo "<h1>$string2</h1>";
    */
   
   /* $array = [1,2,3];
    $array2 = ["a","b","cd"];

    var_dump($array);
    echo "<br>";
    var_dump($array2);

    define("EDAD",25);
    echo EDAD;
    */

   /* echo "<h2>Ejer 1</h2>";
   $random = rand(1,10);
   if($random%2 == 0){
    echo "El numero $random es par";
   }else{
    echo "El numero $random es impar";
   }
  
   echo "<h2>Ejer 2</h2>";
   $random2 = rand(-10,10);
   if($random2 >= 0){
    echo "El numero $random2 es positivo";
   }else{
    echo "El numero $random2 es negativo";
   }
   echo "<h2>Ejer 4</h2>";
   echo "<h2>Ejer 5</h2>";
   $zHoraria = date("e");
   echo "$zHoraria";
   */

   /*
   for ($i = 1; $i <= 50 ; $i++){
    if($i%6 != 0){
        if($i%3 ==0 || $i%2 == 0){
        echo $i."<br>";
    }
   }
   */
  /*
   $suma=0;
   for ($i = 1; $i <= 20 ; $i++){
    if($i%2 == 0){
        $suma += $i;
    }
   
   }
   
   echo $suma;
   echo "<br>";echo "<br>";


   
   $cnt =0;
   $numero = 1;
   while($cnt <= 50){

        $primo = true;
        for($j=2; $j<= $numero-1 && $primo; $j++){
            if($numero%$j==0){
                $primo = false;
            }
        }
        if($primo){
            echo "el numero $numero es primo <br>";
            $cnt++;
        }
        $numero++;
       }

   $array = [
        '77184565'=>'Adrian',
        '87878787'=>'Juanma',
        '78945623'=>'Inma'
    ];
    ?>

        <?php
        foreach($array as $nombre){
            echo "<li>$nombre.<br></li>";
        }
        ?>
    
<TABLE BORDER>
	<thead>
        <tr>
            <th>DNI</th> <th>NOMBRE</th>
        </tr>
		 
	</thead>
    <tbody>
    <?php
    foreach($array as $dni=>$nombre){
        echo "<TR>
		            <TD>$dni</TD> <TD>$nombre</TD> 
	        </TR>";
    }
    ?>
    </tbody>
</table>

$array = [
    '77184565'=>'Adrian',
    '87878787'=>'Juanma',
    '78945623'=>'Inma'
];
$auxiliar = $array;

?>
<h1>Tabla con sort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php

sort($auxiliar);
foreach($auxiliar as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
<h1>Tabla con rsort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php
rsort($auxiliar);
foreach($auxiliar as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
<h1>Tabla con asort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php
asort($array);
foreach($array as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
<h1>Tabla con arsort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php
arsort($array);
foreach($array as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
<h1>Tabla con ksort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php
ksort($array);
foreach($array as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
<h1>Tabla con krsort</h1>
<TABLE BORDER>
<thead>
    <tr>
        <th>DNI</th> <th>NOMBRE</th>
    </tr>
     
</thead>
<tbody>
<?php
krsort($array);
foreach($array as $dni=>$nombre){
    echo "<TR>
                <TD>$dni</TD> <TD>$nombre</TD> 
        </TR>";
}
?>
</tbody>
</table>
*/


$juegos = [
    ["Pacman", "Atari", 60],
    ["Fortnite", "PS4", 0],
    ["Mario Kart", "Super Nintendo", 70],
    ["Street Fighter", "PS4", 50],
    ["Legend of Zelda", "Nintendo 64", 40],
    ["Castelvania", "Nintendo 64", 55]
];

$consola = array_column($juegos,1);
$nombre = array_column($juegos, 0);
$precio = array_column($juegos, 2);

array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $precio, SORT_ASC, $juegos);

for ($i = 0; $i<count($juegos); $i++){
    $juegos[$i][3]=rand(1,10);
}

?>
<TABLE BORDER>
	<thead>
        <tr>
            <th>JUEGO</th> <th>PLATAFORMA</th> <th>PRECIO</th> <th>STOCK</th>
        </tr>
		 
	</thead>
    <tbody>
    <?php
    foreach($juegos as $juego){
        list($nombre, $consola, $precio, $stock ) = $juego;
        echo "<tr>
                <td>$nombre</td><td>$consola</td><td>$precio</td><td>$stock</td>
                </tr>";
    }?>
    
    </tbody>
</table>
<?php

$array50 = [];
for($i = 0; $i<=50;$i++){
    if($i%2==0){
        array_push($array50, $i);
    }
}
print_r($array50);
echo "<br><br>";
shuffle($array50);

print_r($array50);
echo "<br><br>";

sort($array50);
print_r($array50);

?>
</body>
</html>