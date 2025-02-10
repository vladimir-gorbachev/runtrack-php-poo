<?php
// Définition de la classe Livre
class Livre {
    // Déclaration des attributs privés
    private $titre;
    private $auteur;
    private $nombrePages;

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombrePages = $nombrePages;
    }

    // Assesseur (getter) pour le titre
    public function getTitre() {
        return $this->titre;
    }

    // Mutateur (setter) pour le titre
    public function setTitre($nouveauTitre) {
        $this->titre = $nouveauTitre;
    }

    // Assesseur (getter) pour l'auteur
    public function getAuteur() {
        return $this->auteur;
    }

    // Mutateur (setter) pour l'auteur
    public function setAuteur($nouvelAuteur) {
        $this->auteur = $nouvelAuteur;
    }

    // Assesseur (getter) pour le nombre de pages
    public function getNombrePages() {
        return $this->nombrePages;
    }

    // Mutateur (setter) pour le nombre de pages
    public function setNombrePages($nouveauNombrePages) {
        // Validation : le nombre de pages doit être un entier positif
        if (is_int($nouveauNombrePages) && $nouveauNombrePages > 0) {
            $this->nombrePages = $nouveauNombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }

    // Méthode pour afficher les informations du livre
    public function afficherInfos() {
        echo "Titre : " . $this->titre . "<br>";
        echo "Auteur : " . $this->auteur . "<br>";
        echo "Nombre de pages : " . $this->nombrePages . "<br>";
    }
}

// Instanciation d'un livre
$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);

// Affichage des informations initiales
echo "Informations initiales du livre :<br>";
$livre->afficherInfos(); // Affiche "Titre : Le Petit Prince", "Auteur : Antoine de Saint-Exupéry", "Nombre de pages : 96"

// Modification des attributs
$livre->setTitre("1984");
$livre->setAuteur("George Orwell");

// Tentative de modification du nombre de pages avec une valeur invalide
$livre->setNombrePages(-50); // Affiche "Erreur : Le nombre de pages doit être un entier positif."

// Modification du nombre de pages avec une valeur valide
$livre->setNombrePages(328);

// Affichage des nouvelles informations
echo "<br>Informations après modification :<br>";
$livre->afficherInfos(); // Affiche "Titre : 1984", "Auteur : George Orwell", "Nombre de pages : 328"
?>