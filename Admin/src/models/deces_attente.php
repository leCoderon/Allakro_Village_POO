<?php
namespace Application\Models\DecesAttente;

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

class DecesAttenteRepository
{
    public DatabaseConnection $connection;

    public function getDecesAttente(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `deces_attente` ORDER BY id_dec DESC');
        $statement->execute();

        $deces_attentes = [];
        while (($row = $statement->fetch())) {
            $deces_attente = new Deces();
            $deces_attente->idDec = $row['id_dec'];
            $deces_attente->nomDec = $row['nom_dec'];
            $deces_attente->prenDec = $row['pren_dec'];
            $deces_attente->sexDec = $row['sexe_dec'];
            $deces_attente->dateNaisDec = $row['date_nais_dec'];
            $deces_attente->dateDec = $row['date_dec'];
            $deces_attente->lieuDec = $row['lieu_dec'];
            $deces_attente->causeDec = $row['cause_dec'];
            $deces_attente->nomParent = $row['nom_parent'];
            $deces_attente->prenParent = $row['pren_parent'];
            $deces_attente->lieuHabDec = $row['lieu_habit_dec'];
            $deces_attente->fonctDec = $row['fonct_dec'];

            $deces_attentes[] = $deces_attente;
        }


        return $deces_attentes;
        
    }

    public function deleteDecesAttente($id)
    {
    
        $statement = $this->connection->getConnection()->prepare('DELETE FROM deces_attente WHERE id_dec=?');
        $statement->execute([$id]);
    }
    
    public function createDeces(string $nomDec, string $prenomDec, string $sexe, string $dateNais, string $dateDec, string $lieuDec, string $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec)
    {

        $statement = $this->connection->getConnection()->prepare('INSERT INTO deces(	nom_dec, pren_dec, sexe_dec, date_nais_dec, date_dec, lieu_dec,  cause_dec	, nom_parent, pren_parent, lieu_habit_dec, fonct_dec) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $affectedLines = $statement->execute([$nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec]);

        return ($affectedLines > 0);
    }
    // function getDece($id): Deces
// {
//      
//         $statement = $this->connection->getConnection()->prepare('SELECT * FROM `deces` WHERE id_dec = ?');
//         $statement->execute([$id]);

    //         $row = $statement->fetch();
//         $deces = new Deces();
//         $deces->idDec = $row['id_dec'];
//         $deces->nomDec = $row['nom_dec'];
//         $deces->prenDec = $row['pren_dec'];
//         $deces->sexDec = $row['sexe_dec'];
//         $deces->dateNaisDec = $row['date_nais_dec'];
//         $deces->dateDec = $row['date_dec'];
//         $deces->lieuDec = $row['lieu_dec'];
//         $deces->causeDec = $row['cause_dec'];
//         $deces->nomParent = $row['nom_parent'];
//         $deces->prenParent = $row['pren_parent'];
//         $deces->lieuHabDec = $row['lieu_habit_dec'];
//         $deces->fonctDec = $row['fonct_dec'];
//     }

    //     return $deces;
// }

    // function updateDeces($nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenomParent, $lieuHabDec, $fonctDec, $id): bool
// {
//      
//         $statement = $this->connection->getConnection()->prepare(
//             'UPDATE deces SET nom_dec = ?, pren_dec = ?, sexe_dec = ?, date_nais_dec = ?, date_dec = ?, lieu_dec = ?, cause_dec = ?,nom_parent = ?,pren_parent = ?,lieu_habit_dec = ?, fonct_dec = ? WHERE id_dec = ?'
//         );
//         $affectedLines = $statement->execute([$nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenomParent, $lieuHabDec, $fonctDec,  $id]);

    //     }
//     return ($affectedLines > 0);
// }

    // function createDeces(string $nomDec, string $prenomDec, string $sexe, string $dateNais, string $dateDec, string $lieuDec, string $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec)
// {
//      
//         $statement = $this->connection->getConnection()->prepare('INSERT INTO deces(	nom_dec, pren_dec, sexe_dec, date_nais_dec, date_dec, lieu_dec,  cause_dec	, nom_parent, pren_parent, lieu_habit_dec, fonct_dec) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
//         $affectedLines = $statement->execute([$nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenParent, $lieuHabDec, $fonctDec]);
//     }
//     return ($affectedLines > 0);
// }


}