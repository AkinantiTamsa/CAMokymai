<html>
<body>

Laba diena, <?php echo $_POST["pastas"]; ?>!<br>
Jūsų pašto adresas yra: <?php echo $_POST["vardas"]; ?><br>
Rombas, kurio kraštinė lygi <?php echo $_POST["krastine"]; ?>:<br>
<?php
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
picture($_POST["krastine"]);
?>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
</body>
</html>