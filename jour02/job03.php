<?php
// Définition de la classe Personne
class Personne {
    // Déclaration des attributs
    public $nom;
    public $prenom;

    // Définition du constructeur
    public function __construct($nom, $prenom) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Définition de la méthode SePresenter()
    public function SePresenter() {
        // Retourne une chaîne de caractères avec le nom et le prénom
        return "Je m'appelle " . $this->prenom . " " . $this->nom . ".";
    }
}

// Instanciation de plusieurs objets Personne
$personne1 = new Personne("Zamarenova", "Vladimir");
$personne2 = new Personne("Pouzioux", "Armelle");
$personne3 = new Personne("Mangeot", "Jolyne");


// Appel de la méthode SePresenter() pour chaque personne
echo $personne1->SePresenter() . "<br>"; 
echo $personne2->SePresenter() . "<br>"; 
echo $personne3->SePresenter() . "<br>";
?>