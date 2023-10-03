<?php
include("moyenne.php");

$Notes = array(15,12,9);

$salaire_i = array(1000,1500,2000,1200,6000,900,2100);
$salaire_p = array(1000,1500,2000,1200,6000,9000);

sort($salaire_p);
sort($salaire_i);

echo "moyenne des notes est de : ".moyenne($Notes)." / 20 \n" ;

echo "moyenne des salaires impaire : ".moyenne($salaire_i)."\n" ;
echo "moyenne des salaires paire : ".moyenne($salaire_p)."\n" ;
echo "mediane impaire est de : ".mediane($salaire_i)."\n";
echo "mediane paire est de : ".mediane($salaire_p);

?>