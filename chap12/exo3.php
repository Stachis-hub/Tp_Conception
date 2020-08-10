<?php
//Nom et pass associé autorisant l'accès au site
//En pratique ils proviennent d'une base de données
$login="Stachis";
$motpass="123456";
//Récupération des valeurs saisies
if (isset($_POST['nom']) and isset($_POST['pass'])) {
    $nom=$_POST['nom'];
    $pass=$_POST['pass'];

    //Vérification
    if($nom==$login AND $pass=$motpass)
    {
    $expir=time() + 200;
    //Ecriture des cookies
    setcookie("nom",$nom,$expir);
    setcookie("pass",$pass,$expir);
    //Redirection vers la page à accès réservé
    echo "<script type=\"text/javascript\">
    window.location='exo3_1.php' </script>";
    }
    else
    {
    //Redirection vers la page de saisie du code
    echo "<script type=\"text/javascript\">
    window.location='exo3_2.php' </script>";
    }
}
else
    {
        if(isset($_COOKIE['nom']) AND isset($_COOKIE['pass'])){

             //Redirection vers la page de saisie du code
             echo "<script type=\"text/javascript\">
             window.location='exo3_1.php' </script>";
        }
        else{

            //Redirection vers la page de saisie du code
            echo "<script type=\"text/javascript\">
            window.location='exo3_2.php' </script>";
        }
    }
?>
