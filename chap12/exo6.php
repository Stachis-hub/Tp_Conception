<?php
$mailJ=array("mjouonang@gmail.com","Nouvelles informations sur la programmation","Du nouveau dans le
langage du Web");
$mailF=array("fomekongorich@yahoo.com","Le big data","La base de données
évolue");
$mailA=array("amanggabriel9@gmail.com","AN 2005","Les débuts de l'IA ");
$tabmail=array($mailJ,$mailF,$mailA);
foreach($tabmail as $tab)
{
if(mail($tab[0],$tab[1],$tab[2]))
{
echo "Mail envoyé à $tab[0]";
}
}
?>