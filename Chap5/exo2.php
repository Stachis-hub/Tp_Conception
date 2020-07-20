<?php
$sexe = 'F';
$age = 10;
if($sexe = 'F'){
    if($age > 21 && $age >= 40){
        echo "<b> Votre sexe est $sexe , alors vous etes une femme, et vous avez $age ans</b><br />";
    }else{
        echo "<b> Votre sexe est $sexe , alors vous etes certe une femme, mais vous avez $age ans, vous n'etes donc pas dans la tranche d'age réglémentaire.</b><br />";
    }
}else {
echo "<b>Vous n'etes pas une femme, GET-OUT!!!!!! </b><br />";
}


?>
