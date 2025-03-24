<?php
// inclut fichiers Titulaire.php et CompteBancaire.php
require_once "Titulaire.php";
require_once "CompteBancaire.php";

// Création de titulaires
$titulaire1 = new Titulaire("Doe", "John", "1980-05-15", "Paris");
$titulaire2 = new Titulaire("Smith", "Jane", "1992-12-10", "Lyon");

// Création de comptes bancaires
$compte1 = new CompteBancaire("Compte courant", 1000, "EUR", $titulaire1);
$compte2 = new CompteBancaire("Livret A", 5000, "EUR", $titulaire1);
$compte3 = new CompteBancaire("Compte courant", 2000, "EUR", $titulaire2);

// Opérations sur les comptes
$compte1->crediter(500);
$compte2->debiter(1000);
$compte1->virement($compte3, 200);

// Affichage des informations
echo "<h2>Informations du titulaire 1 :</h2>";
echo $titulaire1 . "<br>";
foreach ($titulaire1->getComptes() as $compte) {
    echo "- " . $compte->getLibelle() . " : " . $compte->getSolde() . " " . $compte->getDevise() . "<br>";
}

echo "<h2>Informations du compte 3 :</h2>";
echo "Titulaire : " . $compte3->getTitulaire() . "<br>";
echo "Libellé : " . $compte3->getLibelle() . "<br>";
echo "Solde : " . $compte3->getSolde() . " " . $compte3->getDevise() . "<br>";

?>