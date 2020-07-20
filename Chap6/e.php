<?php
//Il faut $A > $B
$A=56.952;
$B=3444;
try
{
if(!(is_integer($A) OR !(is_integer($B))))
{throw new Exception("Nombre(s) non entiers !",99);}
else
{
echo "Le PGCD de $A et $B est : ";
do
{
$R=$A%$B;
$A=$B;
$B=$R;
}
while($R!=0);
echo $A ;
}
}
catch(Exception $except)
{
echo $except->getMessage();
}
?>
