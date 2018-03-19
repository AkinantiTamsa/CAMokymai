<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Namų darbas1&Paskaita3</title>
    <link rel="icon" href="media/icon/akys.jpg" />
    <link rel="STYLESHEET" type="text/css" href="NamuDarbas1.css">
      <h2>Teksto funkcijos:</h2>
<!--      <style type="text/css">-->
<!--          span {-->
<!--              display: block;-->
<!--              height: 60px;-->
<!--              width: 60px;-->
<!--              line-height: 60px;-->
<!---->
<!--              -moz-border-radius: 30px; /* or 50% */-->
<!--              border-radius: 30px; /* or 50% */-->
<!---->
<!--              background-color: black;-->
<!--              color: white;-->
<!--              text-align: center;-->
<!--              font-size: 2em;-->
<!--          }-->
<!--      </style>-->
  </head>
  <body>
<!--      <form action="/action_NamuDirPaskaita3.php">-->
<!--          Amžius:-->
<!--          <input type="number" name="amzius">-->
<!--          <input type="submit">-->
<!--      </form>-->
<?php
include('./funkcijos/Funkcijos.php');
include('./funkcijos/TekstoFunkcijos.php');
echo metaii(1678). "<br>";

echo reverse(labas);

  echo didziosios(bet);
  "<br>";

echo mazosios(SUDERVĖ);

echo palendra(dfgjv). "<br>";
echo tekstasatbulai("Sveikas, Pavasari");
"<br>";
"<p>Daugyboslentelės:</p>";
//Mano lentelė:
echo "<table border=2 width=auto>";
for ($x = 1; $x <= 10; $x++) {
    echo "<tr>";
    for ($y = 1; $y <=10; $y++){
    $z = $x*$y;
    echo "<td>". "$y x $x = $z"."</td>";
}
    echo "</tr>";
}
echo "</table>";

//dėstytojo lentelė:
echo "<table border=2 width=auto>";
for($tr = 1; $tr <=10; $tr++){
    echo "<tr>";
    for($number=1; $number<=10; $number++){
        $multiply= $tr*$number;
        echo"<td> $tr x $number = $multiply</td>";
    }
    echo"</tr>";
}
echo"</table>";
//$amzius = 22;
//if ($amzius >= 21) {
//    echo "Gali nusipirkti Alaus :)";
//}
//else {
//    echo "Prašyk vyresnio draugo nupirkti Alaus";
//}

      ?>
</body>

</html>
