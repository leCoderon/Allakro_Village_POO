<?php
namespace Application\Models\NaissanceAttente;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Naissance
{
    public string $idNais;
    public string $nomEnf;
    public string $prenEnf;
    public string $sexEnf;
    public string $dateNaisEnf;
    public string $modeNaisEnf;
    public string $nomPere;
    public string $prenPere;
    public string $nomMere;
    public string $prenMere;
    public string $lieuHabEnf;

}

class NaissanceAttentesRepository
{
    public DatabaseConnection $connection;

    public function getNaissancesAttente(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM naissance_attente ORDER BY id_nais DESC');
        $statement->execute();

        $naissance_attentes = [];
        while (($row = $statement->fetch())) {
            $naissance_attente = new Naissance();
            $naissance_attente->idNais = $row['id_nais'];
            $naissance_attente->nomEnf = $row['nom_enf'];
            $naissance_attente->prenEnf = $row['pren_enf'];
            $naissance_attente->sexEnf = $row['sexe_enf'];
            $naissance_attente->dateNaisEnf = $row['date_nais_enf'];
            $naissance_attente->modeNaisEnf = $row['mode_nais'];
            $naissance_attente->nomPere = $row['nom_pere'];
            $naissance_attente->prenPere = $row['pren_pere'];
            $naissance_attente->nomMere = $row['nom_mere'];
            $naissance_attente->prenMere = $row['pren_mere'];
            $naissance_attente->lieuHabEnf = $row['lieu_hab_enf'];

            $naissance_attentes[] = $naissance_attente;

        }
        return $naissance_attentes;

    }

    public function deleteNaissanceAttente($id): bool
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM naissance_attente WHERE id_nais = ?');
        $affectedLines = $statement->execute([$id]);
        return ($affectedLines > 0);
    }

    // function getNaissance(string $id): Naissance
// {
//      
//         $statement = $this->connection->getConnection()->prepare('SELECT * FROM naissance WHERE id_nais = ?');
//         $statement->execute([$id]);

    //         $row = $statement->fetch();
//         $naissance = new Naissance();
//         $naissance->idNais = $row['id_nais'];
//         $naissance->nomEnf = $row['nom_enf'];
//         $naissance->prenEnf = $row['pren_enf'];
//         $naissance->sexEnf = $row['sexe_enf'];
//         $naissance->dateNaisEnf = $row['date_nais_enf'];
//         $naissance->modeNaisEnf = $row['mode_nais'];
//         $naissance->nomPere = $row['nom_pere'];
//         $naissance->prenPere = $row['pren_pere'];
//         $naissance->nomMere = $row['nom_mere'];
//         $naissance->prenMere = $row['pren_mere'];
//         $naissance->lieuHabEnf = $row['lieu_hab_enf'];


    //     }
//     return $naissance;
// }



    function createNaissance(string $nomEnf, string $prenomEnf, string $sexe, string $dateNais, string $modeNais, string $nomPere, string $prenomPere, $nomMere, $prenomMere, $lieuHab)
    {

        $statement = $this->connection->getConnection()->prepare('INSERT INTO naissance(nom_enf, pren_enf, sexe_enf, date_nais_enf, mode_nais, nom_pere,  pren_pere, nom_mere, pren_mere, lieu_hab_enf) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $affectedLines = $statement->execute([$nomEnf, $prenomEnf, $sexe, $dateNais, $modeNais, $nomPere, $prenomPere, $nomMere, $prenomMere, $lieuHab]);

        return ($affectedLines > 0);
    }

    // function updateNaissance($nomEnf, $prenomEnf, $sexe, $dateNais, $modeNais, $nomPere, $prenomPere, $nomMere, $prenomMere, $lieuHab, $id): bool
// {
//      
//         $statement = $this->connection->getConnection()->prepare(
//             'UPDATE naissance SET nom_enf = ?, pren_enf = ?, sexe_enf = ?, date_nais_enf = ?, mode_nais = ?, nom_pere = ?, pren_pere = ?, nom_mere = ?, pren_mere = ?, lieu_hab_enf = ? WHERE id_nais = ?'
//         );
//         $affectedLines = $statement->execute([$nomEnf, $prenomEnf, $sexe, $dateNais, $modeNais, $nomPere, $prenomPere, $nomMere, $prenomMere, $lieuHab, $id]);

    //     }
//     return ($affectedLines > 0);
// }

}