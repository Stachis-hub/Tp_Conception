<?php
$tabadresse=array("mjouonang@gmail.com","amanggabriel9@gmail.com","fomekongorich@gmyahoo.com");
$objet="Message";
$message="devoirs de conception";
$entete = "Exercices du chapitre 12";
foreach($tabadresse as $dest)
{
if(mail($dest,$objet,$message,$entete))
{
echo "Mail envoyé à $dest";
}
else
{
echo "le mail n'a pas été envoyé <br>";
}
}
?>