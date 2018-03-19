<?php
function reverse($string){
    $string = strrev($string);
    return $string. "<br>";
}
function didziosios($string){
    $string = strtoupper($string);
    return $string . "<br>";
}
function mazosios($string) {
    $string = strtolower($string);
    return $string . "<br>";
}
function palendra($string){
    if($string===strrev($string)){
        $string = strtoupper($string);
    }
    elseif($string<>strrev($string)){
        $string = strtolower($string);
    }
    else $string = "Bėda";
    return $string;
}
function tekstasatbulai($eilute)
{
    echo "Simbolių skaičius - ";
    echo strlen($eilute), "<br>";
    $simboliusk = strlen($eilute);
    for ($simbolis = $simboliusk; $simbolis >= 0; $simbolis--) {
        echo substr($eilute, $simbolis, 1);
        //echo $simbolis;
    }
    echo "<br>";
}
