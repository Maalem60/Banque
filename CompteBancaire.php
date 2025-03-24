<?php

class compteBancaire {
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->ajouterCompte($this);
    }

    public function getLibelle(): string {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): void {
        $this->libelle = $libelle;
    }

    public function getSolde(): float {
        return $this->solde;
    }

    public function setSolde(float $solde): void {
        $this->solde = $solde;
    }

    public function getDevise(): string {
        return $this->devise;
    }

    public function setDevise(string $devise): void {
        $this->devise = $devise;
    }

    public function getTitulaire(): Titulaire {
        return $this->titulaire;
    }

    public function setTitulaire(Titulaire $titulaire): void {
        $this->titulaire = $titulaire;
    }

    public function crediter(float $montant): void {
        $this->solde += $montant;
    }

    public function debiter(float $montant): void {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant !";
        }
    }

    public function virement(CompteBancaire $compteDestination, float $montant): void {
      
            if ($this->solde >= $montant) {
                $this->solde -= $montant;
            } else {
                echo "Solde insuffisant !";
            
        }
    }
}

?>
