<?php
namespace Application\Models\Deces;
require_once('src/lib/bdConnection.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Deces
{
    public string $idDec;
    public string $nomDec;
    public string $prenDec;
    public string $sexDec;
    public string $dateNaisDec;
    public string $dateDec;
    public string $lieuDec;
    public string $causeDec;
    public string $nomParent;
    public string $prenParent;
    public string $lieuHabDec;
    public string $fonctDec;

}

class decesRepository
{
    public DatabaseConnection $connection;

    public function getDeces(): array
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `deces` ORDER BY id_dec DESC');
        $statement->execute();

        $decess = [];
        while (($row = $statement->fetch())) {
            $deces = new Deces();
            $deces->idDec = $row['id_dec'];
            $deces->nomDec = $row['nom_dec'];
            $deces->prenDec = $row['pren_dec'];
            $deces->sexDec = $row['sexe_dec'];
            $deces->dateNaisDec = $row['date_nais_dec'];
            $deces->dateDec = $row['date_dec'];
            $deces->lieuDec = $row['lieu_dec'];
            $deces->causeDec = $row['cause_dec'];
            $deces->nomParent = $row['nom_parent'];
            $deces->prenParent = $row['pren_parent'];
            $deces->lieuHabDec = $row['lieu_habit_dec'];
            $deces->fonctDec = $row['fonct_dec'];

            $decess[] = $deces;
        }


        return $decess;

    }
    
    public function getDece($id): Deces
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `deces` WHERE id_dec = ?');
        $statement->execute([$id]);

        $row = $statement->fetch();
        $deces = new Deces();
        $deces->idDec = $row['id_dec'];
        $deces->nomDec = $row['nom_dec'];
        $deces->prenDec = $row['pren_dec'];
        $deces->sexDec = $row['sexe_dec'];
        $deces->dateNaisDec = $row['date_nais_dec'];
        $deces->dateDec = $row['date_dec'];
        $deces->lieuDec = $row['lieu_dec'];
        $deces->causeDec = $row['cause_dec'];
        $deces->nomParent = $row['nom_parent'];
        $deces->prenParent = $row['pren_parent'];
        $deces->lieuHabDec = $row['lieu_habit_dec'];
        $deces->fonctDec = $row['fonct_dec'];


        return $deces;
    }

    public function createDecesAttente(string $nomDec, string $prenomDec, string $sexe, string $dateNais, string $dateDec, string $lieuDec, string $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec)
    {
        $statement = $this->connection->getConnection()->prepare('INSERT INTO deces_attente(	nom_dec, pren_dec, sexe_dec, date_nais_dec, date_dec, lieu_dec,  cause_dec	, nom_parent, pren_parent, lieu_habit_dec, fonct_dec) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $affectedLines = $statement->execute([$nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec]);

        return ($affectedLines > 0);
    }
}


?>