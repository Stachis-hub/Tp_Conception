
<?php
//Première méthode
//$ch="PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
//echo "<p>",nl2br($ch),"</p>";
$ch="PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
$ne = preg_replace("/\n/","<br />",$ch);
echo $ne;
?>
