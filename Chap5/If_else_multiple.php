<?php
// ********************if...elseif...else************** **
$cat="PC";
$prix=900;
if($cat=="PC")
{
if($prix >= 1000)
{
echo "<b>Pour l'achat d'un
 PC d'un montant de $prix &euro;, la remise est de
15 %</b><br />";
echo "<h3> Le prix net est
 de : ",$prix*0.85, "&euro; </h3>";
}
else
{
echo "<b>Pour l'achat d'un
 PC d'un montant de $prix &euro;, la remise est de
10 %</b><br />";
echo "<h3> Le prix net est
 de : ",$prix*0.90, "&euro; </h3>";
}
}
elseif($cat=="Livres")
{
echo "<b>Pour l'achat de livres la remise est de 5 %</ b><br />";
echo "<h3> Le prix net est de : ",$prix*0.95, "&euro; </h3>";
}
else
{
echo"<b>Pour les autres achats la remise est de 2 %</ b><br />";
echo "<h3> Le prix net est de : ",$prix*0.98, "&euro; </h3>";
}
?>
