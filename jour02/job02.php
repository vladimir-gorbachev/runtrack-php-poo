<?php
// Définition de la classe Operation
class Operation {
    // Déclaration des attributs avec des valeurs par défaut
    public $nombre1 = 0;
    public $nombre2 = 0;

    // Définition du constructeur
    public function __construct($n1 = 0, $n2 = 0) {
        $this->nombre1 = $n1;
        $this->nombre2 = $n2;
    }

    // Définition de la méthode addition()
    public function addition() {
        // Calcul de la somme des deux attributs
        $resultat = $this->nombre1 + $this->nombre2;
        // Affichage du résultat
        echo "Le résultat de l'addition est : " . $resultat . "<br>";
    }
}

// Instanciation de la classe Operation
$op = new Operation(10, 20);

// Appel de la méthode addition() pour afficher le résultat
$op->addition();
?>