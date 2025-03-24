<?php
class titulaire {
    private string $nom; 
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;
    
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
     $this->nom = $nom;
     $this->prenom = $prenom;
     $this->dateNaissance = new DateTime($dateNaissance);
     $this->ville= $ville;
     $this->comptes = [];   
    }
public function getNom(): string {
    return $this->nom;
}
public function setNom(string $nom): void {
    $this->nom = $nom;
}
public function getPrenom(): string {
    return $this->prenom;
}
public function setPrenom(string $prenom): void {
    $this->prenom = $prenom;
}
public function getDateNaissance(): DateTime {
    return $this->dateNaissance;
}
public function setDateNaissance(DateTime $dateNaissance): void {
    $this->dateNaissance = $dateNaissance;
}
public function getVille(): string {
    return $this->ville;
}
public function setVille(string $ville): void {
    $this->ville = $ville;
}
public function getComptes(): array {
    return $this->comptes;
}
public function ajouterCompte(CompteBancaire $compte): void {
$this->comptes[] = $compte;
}
public function calculerAge(): int {
    $aujourdhui = new DateTime();
    $age = $aujourdhui->diff($this->dateNaissance)->y;
    return $age;
}
public function afficherTitulaire(): void {
echo "<h2>Informations du titulaire 1 :</h2>";
echo $this . "<br>";

foreach ($this->getComptes() as $compte) {
    echo "Titulaire : " . $compte->getTitulaire() . "<br>";
}
}
 // les information des titulaires avec leurs comptes respectif
    public function afficherInformations(): void {
        echo "<h2>Informations du titulaire :</h2>";
        echo "<strong>Nom :</strong> " . $this->nom . "<br>";
        echo "<strong>Prénom :</strong> " . $this->prenom . "<br>";
        echo "<strong>Âge :</strong> " . $this->calculerAge() . " ans<br>";
        echo "<strong>Ville :</strong> " . $this->ville . "<br>";
        echo "<strong>Comptes :</strong><br>";
        echo "<ul>";
        foreach ($this->comptes as $compte) {
            echo "<li>" . $compte->getLibelle() . " : " . $compte->getSolde() . " " . $compte->getDevise() . "</li>";
        }
        echo "</ul>";
    }
    public function __toString(): string {
        return $this->nom . "  " . $this->prenom ."  ( " . $this->calculerAge() . "  ans " .$this->ville . ")";
    }
}


?>

