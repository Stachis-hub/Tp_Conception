<?php
session_start();
$fond=$_SESSION['fond'];
$texte=$_SESSION['texte'];
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />
<title>Couleurs du site avec des sessions</title>
<style type="text/css" >
<!--
body{background-color: <?php echo $fond ?> ; color: <?php echo
$texte ?> ;}
legend{font-weight:bold;font-family:cursive;}
label{font-weight:bold;font-style:italic;}
-->
</style>
</head>
<body>
<p>Contenu de la page B
<a href="ch12exo7.php">Lien vers la page principale</a>
</p>
</body>
</html>
