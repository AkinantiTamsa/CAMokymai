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
    $string="ąčęėįšųūž";
    if($string===strrev($string)){
        $string = strtoupper($string);
    }
    elseif($string<>strrev($string)){
        $string = strtolower($string);
    }
    else $string = "Beda";
    return $string;
}
function tekstasatbulai($eilute)
{
    echo strlen($eilute), "<br>";
    $simboliusk = strlen($eilute);
    for ($simbolis = $simboliusk; $simbolis >= 0; $simbolis--) {
        echo substr($eilute, $simbolis, 1);
        //echo $simbolis;
    }
    echo "<br>";
}
/**
 * Created by PhpStorm.
 * User: Auris
 * Date: 2018.03.07
 * Time: 11:07
 */