<?php
// on recherche un éventuel cookie qui aurait été enregistré

if(isset($_COOKIE['mapage']))
{
$page=$_COOKIE['mapage'];
header("Location:$page");
}
//
if(isset($_POST['mapage']))
{
setcookie("mapage",$_POST['mapage'],time()+20);
header("Location:$page");
echo "Vous avez choisi ",$_POST['mapage'],"<br />";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Choisissez votre page préférée</title>
</head>
<body>
<form method="post" action="exo4.php">
<fieldset>
<legend>Choisissez votre page préférée</legend>
<select name="mapage">
<option value="exo1.php">Exercice 1</option>
<option value="exo3.php">Exercice 3</option>
<option value="exo2.php">Exercice 2</option>
</select>
<br />
<input type="submit" value="Envoyer" />&nbsp;&nbsp;
<input type="reset" value="Effacer" />
</fieldset>
</form>
</body>
</html>