<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Paskaita4</title>
    <link rel="icon" href="media/Sesi.jpg">
      <link rel="STYLESHEET" type="text/css" href="formatai.css">
  </head>
<body>
<h1>Myliu Aurimą!!!</h1>

<div class="image"></div>​
<img src="media/gifai/Heart6.gif" alt="Girl in a jacket">
<link rel="STYLESHEET" type="text/css" href="Formatai.css">
<?php


    $half = rand(0, 1);
    if (0 == $half) echo "<div class='herbas'>H</div><br>";
    else {
        echo "<div class='herbao'>S</div><br>";
    }
    echo "<br>";

//function zodiac($year) {
//    switch($year % 12):
//        case 1: return 'Drakonas'; //2000
//        case 2: return 'Gyvatė';
//        case 3: return 'Arklys';
//        case 4: return 'Ožka';
//        case 5: return 'Beždžionė';
//        case 6: return 'Gaidys';
//        case 7: return 'Šuo';
//        case 8: return 'Kiaulė';
//        case 9: return 'Žiurkė';
//        case 10: return 'Jautis';
//        case 11: return 'Tigras';
//        case 12: return 'Kiškis';
//        endswitch;
//}
//    echo zodiac(5);
echo "<br>";
    function suma($sk1, $sk2, $sk3){
        $suma = $sk1 / $sk2 + $sk3;
        return $suma;
    }
    echo suma( 100,  20, 10);
    echo "<br>";

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
KurtiTrikampi(4)

?>
<p>Skaičiuotuvas:</p>
<form method="post">
    <input type="text" name="numeris1">
    <input type="text" name="numeris2">
    <select name="operator" id="">
        <option>none</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Square</option>
    </select>
    <button type="submit" name="Submit" value="submit" >Skaiciuoti</button>
</form>


<p>Rezultatas:</p>
<?php
if(isset($_POST['Submit'])){
    $result1 = $_POST['numeris1'];
    $result2 = $_POST['numeris2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case "none":
            echo "Pasirinkti skaičiavimo būdą";
            break;
        case "Add":
            echo $result1 + $result2;
            break;
        case "Subtract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
        case "Square":
            echo $result1 * $result1;
            break;
    }
}

?>

</body>

</html>
