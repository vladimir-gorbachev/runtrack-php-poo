<?php
// Définition de la classe Point
class Point {
    // Déclaration des attributs
    private $x;
    private $y;

    // Définition du constructeur
    public function __construct($x, $y){
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Coordonnées du point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher la coordonnée x
    public function afficherX() {
        echo "Coordonnée x : " . $this->x . "<br>";
    }

    // Méthode pour afficher la coordonnée y
    public function afficherY() {
        echo "Coordonnée y : " . $this->y . "<br>";
    }

    // Méthode pour modifier la coordonnée x
    public function changerX($newX) {
        $this->x = $newX;
    }

    // Méthode pour modifier la coordonnée y
    public function changerY($newY) {
        $this->y = $newY;
    }
}

// Instanciation d'un objet Point
$point = new Point(3, 5);

// Affichage des coordonnées initiales
$point->afficherLesPoints(); // Affiche "Coordonnées du point : (3, 5)"

// Affichage de x et y séparément
$point->afficherX(); // Affiche "Coordonnée x : 3"
$point->afficherY(); // Affiche "Coordonnée y : 5"

// Modification des coordonnées
$point->changerX(10);
$point->changerY(15);

// Affichage des nouvelles coordonnées
$point->afficherLesPoints(); 

// Affichage de x et y séparément
$point->afficherX(); 
$point->afficherY();

// Modification des coordonnées
$point->changerX(27);
$point->changerY(23);

// Affichage des nouvelles coordonnées
$point->afficherLesPoints(); 
// Affichage de x et y séparément
$point->afficherX();
$point->afficherY();

?>