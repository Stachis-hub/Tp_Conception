<?php
//le premier nombre doit etre gt le deuxième
$f=87;
$s=678;
if ($f<$s) {
    echo "Erreur!! le premier nombre doit etre supérieur au deuxième";
    exit;
}
try
{
if(!(is_integer($f) OR !(is_integer($s))))
{throw new Exception("Un ou plusieurs de vos nombre(s) n'est pas un entier !",99);}
else
{
echo "Le PGCD de $f et $s est : ";
do
{
$r=$f%$s;
$f=$s;
$s=$r;
}
while($r!=0);
echo $f ;
}
}
catch(Exception $e)
{
echo $e->getMessage();
}
?>
