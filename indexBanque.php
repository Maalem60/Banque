
<?php
// inclut fichiers Titulaire.php et CompteBancaire.php
require_once "Titulaire.php";
require_once "CompteBancaire.php";

// Création de titulaires
$titulaire1 = new Titulaire("Doe", "John", "2000-12-16", "Paris");
$titulaire2 = new Titulaire("Smith", "Jane", "1999-01-02", "Lyon");

// Création de comptes bancaires
$compte1 = new CompteBancaire("Compte courant", 12000, "EUR", $titulaire1);
$compte2 = new CompteBancaire("Livret A", 15000, "EUR", $titulaire1);
$compte3 = new CompteBancaire("Compte courant", 21000, "EUR", $titulaire2);

// Opérations sur les comptes
$compte1->crediter(3500);
$compte2->debiter(1000);
$compte1->virement($compte3, 1200);

// Affichage des informations des titulaires
$titulaire1->afficherInformations();
$titulaire2->afficherInformations();
?>
