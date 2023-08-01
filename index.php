<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
$turma2 = "vamos desenvolver website em PHP";
//o comando echo imprime na tela
echo "<br>".$turma2;
$x = 5 /* + 15 */ + 5;
echo "<br>". $x;

$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo "<br>". $txt."x = " .$x. " y = ".$y;

$txt = "W3Schools.com";
//vai dar erro
//echo  "I love $txt!";
//concertando o codigo acima
echo "<br>". "I love". $txt."!";

$x = 5;
$y = 4;
echo "<br> o valor da soma é igual a" .$x + $y. "<br>";
var_dump($x + $y);

echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
for ($i=0;$i<3;$i++){
    echo "<br>" .$cars[$i];
}

?>

</body>
</html>