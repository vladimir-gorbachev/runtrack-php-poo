<?php
// Définition de la classe Personnage
class Personnage {
    // Déclaration des attributs
    private $x;
    private $y;

    // Définition du constructeur
    public function __construct($x, $y) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour se déplacer à gauche
    public function gauche() {
        $this->y -= 1; // Décrémente y (déplacement vers la gauche)
    }

    // Méthode pour se déplacer à droite
    public function droite() {
        $this->y += 1; // Incrémente y (déplacement vers la droite)
    }

    // Méthode pour se déplacer en haut
    public function haut() {
        $this->x -= 1; // Décrémente x (déplacement vers le haut)
    }

    // Méthode pour se déplacer en bas
    public function bas() {
        $this->x += 1; // Incrémente x (déplacement vers le bas)
    }

    // Méthode pour afficher la position actuelle
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")";
    }
}

// Instanciation d'un objet Personnage avec une position initiale (0, 0)
$personnage = new Personnage(0, 0);

// Affichage de la position initiale
echo $personnage->position() . "<br>";

// Déplacement du personnage
$personnage->droite(); // Déplacement à droite
echo $personnage->position() . "<br>";

$personnage->bas(); // Déplacement en bas
echo $personnage->position() . "<br>";

$personnage->gauche(); // Déplacement à gauche
echo $personnage->position() . "<br>"; 

$personnage->haut(); // Déplacement en haut
echo $personnage->position() . "<br>"; 
?>