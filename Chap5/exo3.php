<?php
$compteur=0;
do
{
$x=rand(0,10000);
$y=rand(0,10000);
$z=rand(0,10000);
$compteur++;
echo $x, "," , $y, "," , $z,"
";
}
while($x%2==0 OR $y%2==1 OR $z%2==1);
echo "Résultat obtenu en $compteur coups";
?>