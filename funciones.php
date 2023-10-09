<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>?, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calificacion(int $nota){
        $calificacion = match(true){
            $nota >=0 && $nota <5 => "Suspenso",
            $nota >=5 && $nota <7 => "Aprobado",
            $nota >=7 && $nota <9 => "Notable",
            $nota >=9 && $nota <10 => "Sobresaliente",
            default => "Error"
        };
        return $calificacion;
    }
    /*
    function sumaDos ($num1, $num2){
        return $num1 + $num2;
    }

    $resultado = sumaDos(1,3);
    echo "<h3>Resultado 1: $resultado</h3>";
    echo "<h3>Resultado 2 : ". sumaDos (3,5) . "</h3>";
    */

    function celsiusAFahrenheit(){

    }
    function fahrenheitACelsius(){
        
    }
    function celsiusAKelvin(){

    }
    function KelvinACelsius(){

    }
    function KelvinAFahrenheit(){

    }
    function fahrenheitAKelvin(){

    }
    ?>

</body>
</html>