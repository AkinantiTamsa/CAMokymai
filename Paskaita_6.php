<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Paskaita6</title>
    <link rel="icon" href="media/icon/Romb.jpg" />
      <link rel="STYLESHEET" type="text/css" href="Paskaita4.css">
  </head>
<body>
<h1>6 Paskaita</h1>
<?php
include 'Funkcijos/Funkcijos.php';
include 'Funkcijos/TekstoFunkcijos.php';

//užduotis kambarių skaičiavimui:
$kambariai =["301" => 4, "302" => 10, "303" => 4];
$uzimti =["301" => 4, "302" => 3, "303" => 0];

foreach ($kambariai as $numeris => $viso) {

    echo "Kambarys " . $numeris . " viso " . $viso . ". Laisvu lovu: " . ($viso - $uzimti[$numeris]) . "<br>";
}

//$sk1 = 10;
//$budvardis = array("geras","skanus","karštas","maistingas","vegetariškas","su mėsa");
//shuffle($budvardis);
//$struktura = 'Šiandien iš %2$s patiekalų tik 1 yra %1$d.
//                Labai %2$s 1 patiekalas iš %1$d pateiktų meniu';
//echo sprintf($struktura, $sk1, $budvardis[0]),"<br>";
//echo sprintf("%'.6d\n", 123);
//echo sprintf("%'.1d\n", 123);
//echo "<br>";

//$flags=["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
//    "Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
//    "Makao" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
//    "Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
//    "Siera Leonė" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
//    "Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg"];
////foreach($salys as $pavadinimas=>$veliava){
////    echo $pavadinimas.": "."<br>". $veliava. "<br>";
////}
//function getflag($flags){
//    foreach($flags as $country=>$veliava){
//        $flags[$country]=sprintf('<li><img src="%s" height="50px"></li>',$veliava);
//    }
//    return $flags;
//}
//$getflag = getflag($flags);
//print_r($getflag);

//$kambariai=["301"=>array(0,1,0,0),
//    "302"=>array(1,1,1,1),
//    "303"=>array(0,0)];
//foreach($kambariai as $numeris=>$item){
//    foreach ($item as $laisvu)
//        $laisvu=sum($item);
//    echo $laisvu;
//    $kambariai[$numeris]=sprintf('kambarys'.$numeris);
//}
//return $kambariai;

$visi=["301"=>4, "302"=>5, "303"=>2];
$uzimti=["301"=>2, "302"=>1, "303"=>2];

echo $visi;
echo $uzimti;


//
//echo "<br>";
//$metai="2006";
//$men="06";
//$diena="06";
//$isodate = sprintf("%04d-%02d-%02d", $metai, $men, $diena);
//echo $isodate;
//echo "<br>";
//$skaiciai=['1','2','3','9'];
//foreach($skaiciai as $skaicius){
//    echo $skaicius;
//}
//echo "<br>";
//tekstasatbulai("Man");
echo "<br>";

KurtiTrikampi(8)
//?>

</body>

</html>
