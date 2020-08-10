<?php
if(isset($_COOKIE['nom']) AND isset($_COOKIE['pass'])){
    $login="Stachis";
    $motpass="123456";
    $nom=$_COOKIE['nom'];
    $pass=$_COOKIE['pass']; 
    
    //Vérification et création du contenu personnalisé
    if($nom==$login AND $pass==$motpass)
    {
    $message= "<h1>BONJOUR ".ucfirst($nom)."</h1>";
    $contenu="<p> Contenu personnalisé.............</p>";
    }
    else
    {
    echo "<script type=\"text/javascript\">
    window.location='exo3.php' ;</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>

<title>Accès grace / des identifiants particuliers</title>
</head>
<body>
<?php
echo $message;
echo $contenu;
?>
</body>
</html>