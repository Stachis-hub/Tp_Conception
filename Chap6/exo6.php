<?php
$m="Zut cette fille est jolie!!";
$ev="Zut";
if( substr_count($m, $ev))
 echo "Votre mot est censuré car il contient un mot indésiré ";
else
echo $m;
?>
