<?php
require_once "Animal.php";
class Frog extends Animal {
  public function getFrogName(){
        return "Kodok";
    }
    public function getFrogLegs(){
        return "4";
}
public function getFrogCold(){
    return "no";
}
public function getFrogjump(){
    return "HOPP HOPPP";
}
}
?>