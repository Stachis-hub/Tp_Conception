<?php
session_start();
//AJOUTER
if($_POST["envoi"]=="AJOUTER" && $_POST["code"]!="" && $_POST["article"]!="" &&
$_POST["prix"]!="")
{
$code=$_POST["code"];
$article= $_POST["article"];
$prix= $_POST["prix"];
$_SESSION['code'][]= $code;
$_SESSION['article'][]= $article;
$_SESSION['prix'][]= $prix;
}
//VERIFIER
if($_POST["envoi"]=="VERIFIER")
{
echo "<table border=\"1\" >";
echo "<tr><td colspan=\"3\"><b>Récapitulatif de votre
commande</b></td>";
echo "<tr><th>&nbsp;code&nbsp;</th><th>&nbsp;article&nbsp;</
th><th>&nbsp;prix&nbsp;</th>";
for($i=0;$i<count($_SESSION["code"]);$i++)
{
echo "<tr> <td>{$_SESSION['code'][$i]}</td>
<td>{$_SESSION['article'][$i]}
</td><td>{$_SESSION['prix'][$i]}</td>";
$prixtotal+=$_SESSION['prix'][$i];
}
echo "<tr> <td colspan=2> PRIX TOTAL </td> <td>".
sprintf("%01.2f", $prixtotal)."</td>";
echo "</table>";
}
//ENREGISTRER
if($_POST["envoi"]=="ENREGISTRER")
{
$idfile=fopen("commande.txt",w);
for($i=0;$i<count($_SESSION["code"]);$i++)
{
fwrite($idfile, $_SESSION["code"][$i]." ;
".$_SESSION["article"][$i]." ; ".$_SESSION["prix"][$i]."; \n");
}
fclose($idfile);
}
//LOGOUT
if($_POST["envoi"]=="LOGOUT")
{
session_unset();
session_destroy();
echo "<h3>La session est terminée</h3>";
}
$_POST["envoi"]="";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta charset="utf-8" />
<title>Gestion de panier</title>
</head>
<body>
<div>
<a href="exo8.php"><strong>Page des livres</strong></a><br />//1
<a href="exo8_1.php"><strong>Page des musiques</strong></a><br />//2
</div>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"
enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Commande des plats</b></legend>
<table>
<tbody>
<tr>
<th> Origine : </th>
<td> <input type="text" name="code" /></td>
</tr>
<tr>
<th>Nom : </th>
<td><input type="text" name="article" /></td>
</tr>
<tr>
<th>prix :</th>
<td><input type="text" name="prix" /></td>
</tr>
<tr>
<td colspan="3">
<input type="submit" name="envoi" value="AJOUTER" />
<input type="submit" name="envoi" value="VERIFIER" />
<input type="submit" name="envoi" value="ENREGISTRER" />
<input type="submit" name="envoi" value="LOGOUT" />
</td>
</tr>
</tbody>
</table>
</fieldset>
</form>
</body>
</html>