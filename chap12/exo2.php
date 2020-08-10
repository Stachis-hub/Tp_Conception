<?php
if(!isset($_COOKIE['couleur']['fond']) AND
!isset($_COOKIE['couleur']['texte']) )
{
    if (!isset($_POST['fond']) and !isset($_POST['texte'])) {
        $_POST['fond'] = '';
        $_POST['texte'] = '';
        }else{
            $fond=$_POST['fond'];
            $texte=$_POST['texte'];
            $expir=time() + 10;
            setcookie("couleur[fond]",$fond,$expir);
            setcookie("couleur[texte]",$texte,$expir);
        }
}
else
{
$fond=$_COOKIE['couleur']['fond'];
$texte=$_COOKIE['couleur']['texte'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Adaptation des couleurs par rapport aux préférences de l'utilisateur</title>
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
<form method="post" action="exo2.php">
<fieldset>
<legend>Choisissez vos couleurs</legend>
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