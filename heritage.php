<?php

class Maman {
    public function getNom() {
        return "Je suis la maman" . PHP_EOL;
    }
}
 class Enfant extends Maman {
    public function getNom() {
        return "Je suis l'enfant" . PHP_EOL;
    }
 }

 $enfant = new Enfant();
 echo $enfant->getNom();