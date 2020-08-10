<?php

if(isset($_POST['fond']) AND isset($_POST['texte'])){
    session_start();
    $_SESSION['fond']= $_POST['fond'] ;
    $_SESSION['texte'] = $_POST['texte'] ;
    //echo $_SESSION['fond'];
}

if(isset($_SESSION['fond']) AND isset($_SESSION['texte'])){
    
    //echo $_SESSION['fond'];
    $fond=$_SESSION['fond'];
    $texte=$_SESSION['texte'];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Pages du site avec vos Couleurs</title>
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
<?php
echo "Salut monsieur, heureux de vous avoir en notre sein <br />";
echo "N'oubliez pas, il n'y a rien de mieux que le ndolè...";
?>
<p>
<a href="exo7.html">Première page</a>
</p>
</body>
</html>