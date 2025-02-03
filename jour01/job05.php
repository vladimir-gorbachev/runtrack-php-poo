<?php
// Définition de la classe
class Animal {
    private $age;
    private $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";

    }

    public function AfficherAge(){
        echo "l'animal à " . $this->age . " ans.<br>"; 
    }

    public function Vieillir() {
        $this->age +=1;
    }

    public function Nommer($nouveauPrenom) {
        $this->prenom = $nouveauPrenom;
    }

    public function AfficherPrenom() {
        echo "Le prenom est: " . $this->prenom . "<br>";
    }

}

$animal = new Animal();

$animal->AfficherAge();

$animal->Vieillir();

$animal->AfficherAge();

$animal->Nommer("Monsieur le poti chat");

$animal->AfficherPrenom();

?>