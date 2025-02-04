<?php
//Définition de la classe Rectangle
class Rectangle {
    private $longueur;
    private $largeur;
    
    // Définition du constructeur
    public function __construct($longueur, $largeur) {
        // Initialisation des attributs dans le constructeur
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseur (getter) pour la longueur
    public function getLongueur() {
        return $this->longueur;
    }

    // Mutateur (setter) pour la longueur
    public function setLongueur($nouvelleLongueur) {
        $this->longueur = $nouvelleLongueur;
    }

    // Assesseur (getter) pour la largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateur (setter) pour la largeur
    public function setLargeur($nouvelleLargeur) {
        $this->largeur = $nouvelleLargeur;
    }

    // Méthode pour afficher les informations du rectangle
    public function afficherInfos() {
        echo "Longueur : " . $this->longueur . "<br>";
        echo "Largeur : " . $this->largeur . "<br>";
    }
}

$rectangle = new Rectangle(10, 5);

// Affichage des informations initiales
echo "<br>Informations initiales du rectangle :<br>";
$rectangle->afficherInfos(); 

// Modification de la longueur et de la largeur
$rectangle->setLongueur(15); 
$rectangle->setLargeur(8);  

// Affichage des nouvelles informations
echo "<br>Informations après modification :<br>";
$rectangle->afficherInfos(); 
?>