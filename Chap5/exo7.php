<?php
$num=57;
$compteur=0;
$x=rand(0,1000);
// Utilisation de la boucle while
/*while($x%$num!=0)
{
$x=rand(0,1000);
$compteur++;
}
echo "$x est multiple de $num: Résultat obtenu en $compteur coups";
*/
//Utilisation de foreach
do
{
$x=rand(0,1000);
$compteur++;
}
while($x%$num!=0);
echo "$x est un multiple de $num <br /> Ce Résultat obtenu après $compteur essais";
?>