<?php
// remplissage du tableau avec la boucle for
for($i=11;$i<=36;$i++){
    $tab[$i]=chr(54+$i);
}

//Lecture des valeurs avec foreach
foreach($tab as $num=>$val){
    echo "Elément numéro $num : $val <br />";
}
?>
