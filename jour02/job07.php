<?php
// Définition de la classe Cercle
class Cercle {
    // Déclaration de l'attribut rayon
    private $rayon;

    // Définition du constructeur
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour modifier le rayon
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour afficher les informations du cercle
    public function afficherInfos() {
        echo "Rayon du cercle : " . $this->rayon . " cm <br>";
        echo "Circonférence : " . $this->circonference() . " cm <br>";
        echo "Diamètre : " . $this->diametre() . " cm <br>";
        echo "Aire : " . $this->aire() . " cm²<br><br>";
    }

    // Méthode pour calculer la circonférence
    public function circonference() {
        return 2 * M_PI * $this->rayon; // Formule : 2 * π * r
    }

    // Méthode pour calculer l'aire
    public function aire() {
        return M_PI * pow($this->rayon, 2); // Formule : π * r²
    }

    // Méthode pour calculer le diamètre
    public function diametre() {
        return 2 * $this->rayon; // Formule : 2 * r
    }
}

// Instanciation de deux cercles
$cercle1 = new Cercle(4); // Cercle avec rayon 4
$cercle2 = new Cercle(7); // Cercle avec rayon 7

// Affichage des informations du premier cercle
echo "Cercle 1 :<br>";
$cercle1->afficherInfos();

// Affichage des informations du deuxième cercle
echo "Cercle 2 :<br>";
$cercle2->afficherInfos();
?>