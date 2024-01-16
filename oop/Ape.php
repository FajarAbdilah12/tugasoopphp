<?php
require_once "Animal.php";
class Ape extends Animal

{
    public function getApeName(){
        return "Kera sakti";
    }
    public function getApeLegs(){
        return "2";
}
public function getApeCold(){
    return "no";
}

public function getYell(){
   return "auoooo";
}
}