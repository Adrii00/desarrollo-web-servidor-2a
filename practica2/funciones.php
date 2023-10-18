<?php
function cambiarDivisa(float $cantidad, string $divisa, string $conversion): float
{
    define("ED", 1.06);
    define("EY", 157.56);
    $convertida = 0;
    switch ($divisa) {
        case 'Dólares':
            $convertida = $cantidad / ED;
            break;
        case 'Yenes':
            $convertida = $cantidad / EY;
            break;

        case 'Euros':
            $convertida = $cantidad;
            break;
        default:
            break;
    }
    if ($conversion == "Dólares") {
        $convertida *= ED;
    } elseif ($conversion == "Yenes") {
        $convertida *= EY;
    }
    return $convertida;
}

function sumatorio(int $n)
{
    if ($n < 0) {
        return "Error en el paso de parametros";
    }
    $suma = 0;
    for ($i = 0; $i <= $n; $i++) {
        $suma += $i;
    }
    return $suma;
}

function factorial(int $n)
{
    if ($n <= 0) {
        return "Error en el paso de parametros";
    }
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

function comprobarEstado(int $numEjem)
{
    if ($numEjem < 2000) {
        if ($numEjem < 500) {
            if ($numEjem == 0) {
                return "Extinto";
            }
            return "En peligro critico";

        }
        return "En peligro";
    }
    return "Amenazado";
}
?>