<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Namų darbas1&Paskaita3</title>
    <link rel="icon" href="media/Spalvoss.jpg" />
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
  function metaii($year){
  if ($year %100 === 0) {
  return $year/100 . 'osom';
  }
  else{
      return(int)($year/100)+1 . 'nelabai';
  }
  }
echo metaii(2000). "<br>";

  function reverse($string){
      $string = strrev($string);
      return $string. "<br>";
  }
echo reverse(labas);

  function didziosios($string){
      $string = strtoupper($string);
      return $string . "<br>";
  }
  echo didziosios(bet);
  "<br>";
function mazosios($string) {
    $string = strtolower($string);
    return $string . "<br>";
}
echo mazosios(SUDERVĖ);

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
echo palendra(). "<br>";

//Mano lentelė:
echo "<table border=2 width=auto>";
for ($x = 1; $x <= 18; $x++) {
    echo "<tr>";
    for ($y = 1; $y <=15; $y++){
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
