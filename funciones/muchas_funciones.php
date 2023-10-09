<?php
define("General", 21);
define("Reducido", 10);
define("Superreducido", 4);
function precioSinIva(float $precio, $tipo)
{
    switch (strtoupper($tipo)) {
        case 'GENERAL':
            return $precio - (General % $precio);
            break;

        case 'REDUCIDO':
            return $precio - (Reducido % $precio);
            break;

        case 'SUPERREDUCIDO':
            return $precio - (Superreducido % $precio);
            break;

        case 'SINIVA':
            return $precio;
            break;

        default:
            # code...
            break;
    }
}
function precioConIva(float $precio, $tipo)
{
    switch (strtoupper($tipo)) {
        case 'GENERAL':
            return $precio + (General % $precio);
            break;

        case 'REDUCIDO':
            return $precio + (Reducido % $precio);
            break;

        case 'SUPERREDUCIDO':
            return $precio + (Superreducido % $precio);
            break;

        case 'SINIVA':
            return $precio;
            break;

        default:
            # code...
            break;
    }

}


function potencia(int $base, $exp) : int{
    $resultado = 0;
}
function nPrimos(){

}

function max3(){

}
function convertirTemperatura(){

}
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
