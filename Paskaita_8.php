<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Paskaita 8</title>
    <link rel="icon" href="media/icon/sesi.jpg" />
      <link rel="STYLESHEET" type="text/css" href="formatai_8.css">
  </head>
<body>
<h1>8 Paskaita</h1>
<?php
include 'Funkcijos/Funkcijos.php';
include 'Funkcijos/TekstoFunkcijos.php';
KurtiRomba(16);
//KurtiTrikampi(4);
function picture($number){
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
//SIMBOLIAI: ☂ ☔ ✈ ☀ ☼ ☁ ⚡ ⌁ ☇ ☈ ❄ ❅ ❆ ☃ ☉ ☄ ★ ☆ ☽ ☾ ⌛ ⌚ ⌂ ✆ ☎ ☏ ✉ ☑ ✓ ✔ ⎷ ⍻ ✖ ✗ ✘ ☒ ✕ ☓ ☕ ♿ ✌ ☚ ☛ ☜ ☝ ☞ ☟ ☹ ☺ ☻ ☯ ⚘ ☮ ⚰ ⚱ ⚠ ☠ ☢ ⚔ ⚓ ⎈ ⚒ ☡ ❂ ⚕ ⚖ ⚗ ✇ ☣ ⚙ ☤ ⚚ ⚜ ☥ ✝ ☦ ☧ ☨ ☩ † ☪ ☫ ☬ ☭ ✁ ✂ ✃ ✄ ✍ ✎ ✏ ✐  ✑ ✒ ✙ ✚ ✜ ✛ ♰ ♱ ✞ ✟ ✠ ✡ ☸ ✢ ✣ ✤ ✥ ✦ ✧ ✩ ✪ ✫ ✬ ✭ ✮ ✯ ✰ ✲ ✱ ✳ ✴ ✵ ✶ ✷ ✸ ✹ ✺ ✻ ✼ ✽ ✾ ❀ ✿ ❁ ❃ ❇ ❈ ❉ ❊ ❋ ⁕ ☘ ❦ ❧ ☙ ❢ ❣ ♀ ♂ ⚤ ⚦ ⚧ ⚨ ⚩ ☿ ♁ ⚯ ♛ ♕ ♚ ♔ ♜ ♖ ♝ ♗ ♞ ♘ ♟ ♙ ☗ ☖ ♠ ♣ ♦ ♥ ❤ ❥ ♡ ♢ ♤ ♧ ⚀ ⚁ ⚂ ⚃ ⚄ ⚅ ⚇ ⚆ ⚈ ⚉ ♨ ♩ ♪ ♫ ♬ ♭ ♮ ♯ ⏏ ⎗ ⎘ ⎙ ⎚ ⎇ ⌘ ⌦ ⌫ ⌧ ♲ ♳ ♴ ♵ ♶ ♷ ♸ ♹ ♻ ♼ ♽ ⁌ ⁍ ⎌ ⌇ ⍝ ⍟ ⍣ ⍤ ⍥ ⍨ ⍩ ⎋ ♃ ♄ ♅ ♆ ♇ ♈ ♉ ♊ ♋ ♌ ♍ ♎ ♏ ♐ ♑ ♒ ♓ ⏚ ⏛
//picture($_POST["krastine"]);
picture(2);
picture(3);
picture(4);

?>


</body>

</html>
