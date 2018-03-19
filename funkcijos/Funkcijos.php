<?php
function zodiac($year) {
    switch($year % 12):
        case 1: return 'Drakonas'; //2000
        case 2: return 'Gyvatė';
        case 3: return 'Arklys';
        case 4: return 'Ožka';
        case 5: return 'Beždžionė';
        case 6: return 'Gaidys';
        case 7: return 'Šuo';
        case 8: return 'Kiaulė';
        case 9: return 'Žiurkė';
        case 10: return 'Jautis';
        case 11: return 'Tigras';
        case 12: return 'Kiškis';
    endswitch;
}
function sumatrijusk($sk1, $sk2, $sk3){
    $suma = $sk1 + $sk2 + $sk3;
    return $suma;
}
Function KurtiTrikampi($virsune)
{
    for ($break = 1; $break <= $virsune; $break++) {
        for ($dot = 1; $dot <= $break; $dot++) {
            echo "♡";
        }
        echo "<br>";
    }
    for ($break <= $virsune; $break >= 1; $break--) {
        for ($dot = 1; $dot <= $break; $dot++) {
            echo "♡";
        }
        echo "<br>";
    }
    for($kint1 = 1; $kint1 <=$virsune; $kint1++){
        echo str_repeat("♡",$kint1). "<br>";
    }
    for($kint1 >=$virsune; $kint1>=1; $kint1--){
        echo str_repeat("♡",$kint1). "<br>";
    }
}
Function KurtiRomba($virsune)
{
     for($kint1 = 1; $kint1 < $virsune; $kint1++) {
         $kint2=$virsune-$kint1;
//         echo str_repeat("&nbsp", $kint1*2);
//         echo str_repeat("♡ &nbsp", $kint2). "<br>";
         echo str_repeat("&nbsp", $kint2*5+4);
         echo str_repeat("☎ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp", $kint1). "<br>";
     }

    for($kint1=$virsune; $kint1>=1; $kint1--) {
        $kint2=$virsune-$kint1;
        echo str_repeat("&nbsp", $kint2*5+4);
        echo str_repeat("☎ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp", $kint1). "<br>";
     }
}
function rombas($number){
    for($break = 1; $break < $number; $break++){
        for($dot = $number-$break;$dot>=0;$dot--)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        for($dot= 2*$break-1;$dot > 0;$dot--)
            echo ("&nbsp;✇&nbsp;");
        echo "<br>";
    };
    for($break = $number;$break >= 0;$break--){
        for($dot = $number - $break; $dot>=0; $dot--)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        for($dot=2*$break-1;$dot>0;$dot--)
            echo ("&nbsp;✇&nbsp;");
        echo "<br>";
    }
}

function metaii($year){
    if ($year %100 === 0) {
        return $year/100 . '<br>osom';
    }
    else{
        return(int)($year/100)+1 . 'nelabai';
    }
}

function daugyboslentele($skaiciusiki){
    echo "<table border=2 width=auto>";
    for ($x = 1; $x <= $skaiciusiki; $x++) {
        echo "<tr>";
        for ($y = 1; $y <=$skaiciusiki; $y++){
            $z = $x*$y;
            echo "<td>". "$y x $x = $z"."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<table>";
}
/**
 * Created by PhpStorm.
 * User: Auris
 * Date: 2018.03.07
 * Time: 10:17
 */
?>