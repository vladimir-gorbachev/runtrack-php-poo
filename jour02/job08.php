<?php
// Définition de la classe Produit
class Produit {
    private string $nom;
    private float $prixHT;
    private float $TVA;

    // Constructeur
    public function __construct(string $nom, float $prixHT, float $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function CalculerPrixTTC(): float {
        return $this->prixHT * (1 + $this->TVA);
    }

    // Méthode pour afficher toutes les infos du produit sous forme de chaîne
    public function afficher(): string {
        return "<br>Produit: {$this->nom}, Prix HT: {$this->prixHT}€, TVA: " . ($this->TVA * 100) . "%, Prix TTC: " . $this->CalculerPrixTTC() . "€<br><br>";
    }

    // Getter pour le nom
    public function getNom(): string {
        return $this->nom;
    }

    // Getter pour le prix HT
    public function getPrixHT(): float {
        return $this->prixHT;
    }

    // Getter pour la TVA
    public function getTVA(): float {
        return $this->TVA;
    }

    // Setter pour modifier le nom du produit
    public function setNom(string $nouveauNom): void {
        $this->nom = $nouveauNom;
    }

    // Setter pour modifier le prix HT
    public function setPrixHT(float $nouveauPrix): void {
        if ($nouveauPrix >= 0) {
            $this->prixHT = $nouveauPrix;
        }
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 1200.00, 0.20); // TVA 20%
$produit2 = new Produit("Smartphone", 800.00, 0.20);
$produit3 = new Produit("Casque Audio", 150.00, 0.10); // TVA 10%

// Affichage des produits avant modification
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";
echo $produit3->afficher() . "\n";

// Modification du nom et du prix des produits
$produit1->setNom("PC Gamer");
$produit1->setPrixHT(1400.00);

$produit2->setNom("iPhone 15");
$produit2->setPrixHT(999.99);

$produit3->setNom("Casque Bose");
$produit3->setPrixHT(200.00);

// Affichage des produits après modification
echo "\nAprès modifications :\n";
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";
echo $produit3->afficher() . "\n";
?>