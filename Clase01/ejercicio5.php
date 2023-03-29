<?php
$num=46;

for ($i=20; $i<60 ; $i++) 
{    
       echo "El numero es:$i <br>";
}
/*

function convertirNumeroEnPalabras($numero) {
    $unidades = array("", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve");
    $decenas = array("", "diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa");
    $centenas = array("", "ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos");
    
    if ($numero == 0) {
        return "cero";
    }
    
    $palabra = "";
    
    if ($numero < 0) {
        $palabra = "menos ";
        $numero = abs($numero);
    }
    
    if ($numero < 10) {
        $palabra .= $unidades[$numero];
    } elseif ($numero < 20) {
        switch ($numero) {
            case 10:
                $palabra .= "diez";
                break;
            case 11:
                $palabra .= "once";
                break;
            case 12:
                $palabra .= "doce";
                break;
            case 13:
                $palabra .= "trece";
                break;
            case 14:
                $palabra .= "catorce";
                break;
            case 15:
                $palabra .= "quince";
                break;
            default:
                $palabra .= $unidades[$numero - 10] . "dies";
                break;
        }
    } elseif ($numero < 100) {
        $palabra .= $decenas[intval($numero / 10)];
        $resto = $numero % 10;
        if ($resto > 0) {
            if ($resto == 1) {
                if ($numero == 21) {
                    $palabra .= "ún";
                } else {
                    $palabra .= "iún";
                }
            } else {
                $palabra .= " y " . $unidades[$resto];
            }
        }
    } elseif ($numero < 1000) {
        $palabra .= $centenas[intval($numero / 100)];
        $resto = $numero % 100;
        if ($resto > 0) {
            $palabra .= " " . convertirNumeroEnPalabras($resto);
        }
    } else {
        $palabra .= "Número fuera de rango";
    }
    
    return $palabra;
}

// ejemplo de uso
echo convertirNumeroEnPalabras(123); // imprime "ciento veintitrés"


*/