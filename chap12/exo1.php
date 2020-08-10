<?php
if(!isset($_COOKIE['fond']) AND !isset($_COOKIE['texte']) )
{
    if (isset($_POST['fond']) and isset($_POST['texte'])) {
    $fond=$_POST['fond'];
    $texte=$_POST['texte'];
    $expir=time() + 2*30*24*3600;
    setcookie("fond",$fond,$expir);
    setcookie("texte",$texte,$expir);
    }
}
else
{
$fond=$_COOKIE['fond'];
$texte=$_COOKIE['texte'];
}
if (!isset($_POST['fond']) and !isset($_POST['texte'])) {
    echo "Aucune valeur de couleur n'est spécifiée pour le moment";
}
else{
    $fond=$_POST['fond'];
    $texte=$_POST['texte'];
    $expir=time() + 2*30*24*3600;
    setcookie("fond",$fond,$expir);
    setcookie("texte",$texte,$expir);
}

?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<meta charset="utf-8" />
<title>Couleurs du site</title>
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
<form method="post" action="exo1.php">
<fieldset>
<legend>Choisissez vos couleurs --- veuillez écrire des couleurs en anglais</legend>
<label>Couleur de fond
<input type="text" name="fond" />
</label><br /><br />
<label>Couleur de texte
<input type="text" name="texte" />
</label><br />
<input type="submit" value="Envoyer" />&nbsp;&nbsp;
<input type="reset" value="Effacer" />
</fieldset>
</form>
</body>
</html>