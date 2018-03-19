<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Paskaita4, Paskaita5</title>
    <link rel="icon" href="media/icon/Sesi.jpg" />
      <link rel="STYLESHEET" type="text/css" href="Moneta.css">
  </head>
<body>
<h1>4 Paskaita</h1>
<h1>5 Paskaita</h1>
<?php
$cars = array("Honda", "BMW", "Volvo");
echo "I like " . $cars[0] . ", I LOVE " . $cars[1] . " and I hate " . $cars[2] . ".";
echo "<br>";
$budvardis=array(" Mažiukas", " Baltas", " Juodas", " Saldus", " Rūgštus"," Baisus", " Mielas", " Minkštas", " Baisiai mandras :)");
$daiktavardis=array("Stalas","BMW","Puodelis","Kugelis", "Keptas kijevo kotletas","Vaiduoklis", "Aurimas", "Šuniukas", "Megztinis", "Tortas", "Ratas");

//unset($budvardis[9]);
//echo (isset($budvardis[8]))?"Yra!!":"Nėra :(";
echo "<br>";

//echo join(' ♡', $budvardis);
//echo "<br>";


unset($budvardis[1],$budvardis[2]);
shuffle($budvardis);
shuffle($daiktavardis);
//print_r($daiktavardis);
//echo "<br>";
//print_r($budvardis);
//echo "<br>";

print ($daiktavardis[0]);
print ($budvardis[0]);
echo "<br>";
print ($daiktavardis[1]);
print ($budvardis[1]);
echo "<br>";
print ($daiktavardis[2]);
print ($budvardis[2]);
echo "<br>";
print ($daiktavardis[3]);
print ($budvardis[3]);
echo "<br>";

echo "<br>";

//echo (isset($budvardis[8]))?"Yra!!":"Nėra :(";
//echo "Būdvardžiai:";
//echo "<br>";
//sort($budvardis);
//echo "<li>";
//echo join("<li>",$budvardis);
//echo "<br>";
//echo "Daiktavardžiai:";
//rsort($daiktavardis);
//echo "<li>";
//echo join("<li>",$daiktavardis);
//echo "<br>";

$savdien=array("Pirmadienis","Antradienis","Trečiadienis","Ketvirtadienis","Penktadienis","Šeštadienis","Sekmadienis");
print_r($savdien);
echo "<br>";
$array=["Pirmadienis"=> "Bloga diena",
    "Antradienis"=>"Dar blogesnė diena",
    "Trečiadienis"=>"Ultra Super Bloga diena",
    "Ketvirtadienis"=>"Meh, gyvent galima :)"];
foreach($array as $diena=>$reiksme){
    echo $diena. ": ". $reiksme. "<br>";
}

$seka = array(1, 2, 3, 4);
foreach ($seka as &$reiksme) {
    $reiksme = $reiksme * 2;
}
// $arr is now array(2, 4, 6, 8)
// without an unset($value), $value is still a reference to the last item: $arr[3]
print_r($seka);
echo "<br>";
foreach ($seka as $key => $reiksme) {
    // $arr[3] will be updated with each value from $arr...
//    echo "{$key} => {$reiksme} ";
    print_r($seka);
}
//$numbers = range(1, 20);
//shuffle($numbers);
//foreach ($numbers as $number) {
//    echo "$number ";
//}
//echo "<br>";
//echo "$numbers[1]";

do {
    $half = rand(0, 1);
    if (0 == $half) echo "<div class='herbas'>H</div><br>";
    else {
        echo "<div class='herbao'>S</div><br>";
    }
}
    while(0==$half);

    echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//include('./funkcijos/Funkcijos.php');
//    echo zodiac(5),"<br>";
//    echo sumatrijusk( 100,  20, 10),"<br>";
//
//
//
//?>
<!--<p>Skaičiuotuvas:</p>-->
<!--<form method="post">-->
<!--    <input type="text" name="numeris1">-->
<!--    <input type="text" name="numeris2">-->
<!--    <select name="operator" id="">-->
<!--        <option>Nieko</option>-->
<!--        <option>Sudėti</option>-->
<!--        <option>Atimti</option>-->
<!--        <option>Dauginti</option>-->
<!--        <option>Dalinti</option>-->
<!--        <option>Kvadratu</option>-->
<!--    </select>-->
<!--    <button type="submit" name="Submit" value="submit" >Skaiciuoti</button>-->
<!--</form>-->
<!---->
<!--<p>Rezultatas:</p>-->
<?php
//if(isset($_POST['Submit'])){
//    $result1 = $_POST['numeris1'];
//    $result2 = $_POST['numeris2'];
//    $operator = $_POST['operator'];
//    switch ($operator) {
//        case "Nieko":
//            echo "Pasirinkti skaičiavimo būdą";
//            break;
//        case "Sudėti":
//            echo $result1 + $result2;
//            break;
//        case "Atimti":
//            echo $result1 - $result2;
//            break;
//        case "Dauginti":
//            echo $result1 * $result2;
//            break;
//        case "Dalinti":
//            echo $result1 / $result2;
//            break;
//        case "Kvadratu":
//            echo $result1 * $result1;
//            break;
//    }
//}
echo "<br>";
KurtiTrikampi(2)
?>

</body>

</html>
