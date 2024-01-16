<?php

require_once "Frog.php";
require_once "Ape.php";


$sheep = new Animal('shaun');
echo "Name : " .$sheep->getName();
echo "</br> Legs : " .$sheep->getLegs();
echo "</br> Cold Blooded : " .$sheep->getCold();

$kodok = new Frog("katak");
echo "</br><br/> Nama : " .$kodok->getFrogName();
echo "</br> Legs : " .$kodok->getFrogLegs();
echo "</br> Cold Blooded : " .$kodok->getFrogCold();
echo "</br> Cold Blooded : " .$kodok->getFrogjump();

$Ape = new Ape("kera sakti");
echo "</br><br/> Nama : " .$Ape->getApeName();
echo "</br> Legs : " .$Ape->getApeLegs();
echo "</br> Cold Blooded : " .$Ape->getApeCold();
echo "</br> Yell : " .$Ape->getYell();
echo "</br"

?>