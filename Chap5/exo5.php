<?php
$x=rand(0,999);
$y = 0;
echo "le nombre sélectionné est ", "  $x <br />";
/*do
{
$y=rand(0,999);
$compteur++;
echo  "  $y <br />";
}
while($x != $y);*/

for($compteur=0;$compteur<1000;$compteur++){
    $y=rand(0,999);
    echo  "  $y <br />";
    if($y == $x){
        break;
    }
}

echo "Résultat obtenu en $compteur coups";
?>