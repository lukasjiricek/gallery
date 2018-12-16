<?php 

$horimg = getimagesize("images/City.jpg");
$verimg = getimagesize("images/Maid.jpg");


echo("Sirka: ".$horimg[0]."</br>"."Vyska: ".$horimg[1]);
echo("</br>");
echo("Sirka: ".$verimg[0]."</br>"."Vyska: ".$horimg[1]);


?>