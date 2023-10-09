<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("Tipo1", 12450);
    define("Tipo2", 20200);
    define("Tipo3", 35200);
    define("Tipo4", 60000);
    define("Tipo5", 300000)
    define("ImpTramo1", 9.5%Tipo1);
    define("ImpTramo2", 12%Tipo2);
    define("ImpTramo3", 15%Tipo3);
    define("ImpTramo4", 18.5%Tipo4);
    define("ImpTramo5", 22.5%Tipo5);

    function calculaIrpf(float $salario){
        $tipo=0;
        if ($salario<12450) {
            $tipo=0;
        }else if ($salario<20200) {
            $tipo=1;
        }else if ($salario<35200) {
            $tipo=2;
        }else if ($salario<60000) {
            $tipo=3;
        }else if ($salario<30000) {
            $tipo=4;
        }else{
            $tipo=5;
        }
        switch ($tipo) {
            case 0:
                return $salario - (9.5%$salario);
                break;
            
            case 1:
                return $salario - ImpTramo1;
                break;
            
            case 2:
                # code...
                break;
            
            case 3:
                # code...
                break;
            
            case 4:
                # code...
                break;
            
            case 5:
                # code...
                break;
            
            default:
                # code...
                break;
        }        

    }
    ?>
</body>
</html>