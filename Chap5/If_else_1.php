<?php
$periode = "Matin";
//$ch = "":
$ch = ($periode == "Matin")?"Bonjour ": "Bonsoir ";
$sexe="M";
$ch .= ($sexe=="F")?"Madame":"Monsieur";
echo "<h2>$ch</h2>";
$nb = 3;
$pmu ="Il faut trouver ".$nb;
$mot = ($nb==1)?" cheval":" chevaux";
echo "<h3> $pmu $mot </h3>";
?>
