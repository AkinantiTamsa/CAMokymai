<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Namų darbas1&3Paskaita</title>
    <link rel="icon" href="media/icon/akys.jpg" />
    <link rel="STYLESHEET" type="text/css" href="NamuDarbas1.css">
      <style type="text/css">
          span {
              display: block;
              height: 60px;
              width: 60px;
              line-height: 60px;

              -moz-border-radius: 30px; /* or 50% */
              border-radius: 30px; /* or 50% */

              background-color: black;
              color: white;
              text-align: center;
              font-size: 2em;
          }
      </style>
  </head>
  <body>
<!--      <form action="/action_page.php">-->
<!--          Amžius:-->
<!--          <input type="number" name="amzius">-->
<!--          <input type="submit">-->
<!--      </form>-->
<?php
include('./funkcijos/Funkcijos.php');

echo metaii(2700). "<br>";

include('./funkcijos/TekstoFunkcijos.php');
echo reverse(labas);

  echo didziosios(betgeraiirčia);
  //iš Funkcijos.php

echo mazosios(SUDERVĖ);

echo palendra(). "<br>";

//Mano lentelė:

echo daugyboslentele(18);
//dėstytojo lentelė:
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
