<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    
    
    ?>
</body>

</html>