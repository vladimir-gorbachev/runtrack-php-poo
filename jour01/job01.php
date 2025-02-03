<?php
// Définition de la classe Operation
class Operation {
    // Déclaration des attributs avec des valeurs par défaut
    public $nombre1 = 0;
    public $nombre2 = 0;

    // Définition du constructeur
    public function __construct($n1 = 0, $n2 = 0) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->nombre1 = $n1;
        $this->nombre2 = $n2;
    }
}

// Instanciation de la classe Operation
// On crée un objet $op à partir de la classe Operation
$op = new Operation(10, 20);

// Affichage des attributs de l'objet $op
echo "nombre1 : " . $op->nombre1 . "<br>"; // Affiche 10
echo "nombre2 : " . $op->nombre2 . "<br>"; // Affiche 20
?>