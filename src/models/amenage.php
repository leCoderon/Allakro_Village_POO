<?php
namespace Application\Models\Amenage;
require_once('src/lib/bdConnection.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Amenage
{
    public string $idAm;
    public string $nomAm;
    public string $prenAm;
    public string $dateNais;
    public string $provenance;
    public string $sexe;
    public string $lieuHab;
    public string $modeHeb;
    public string $fonct;

}

class amenageRepository
{
    public DatabaseConnection $connection;

    public function createAmenage($nom, $prenom, $sexe, $dateNais, $provenance, $mode, $domicile, $fonction): bool
    {
        $statement = $this->connection->getConnection()->prepare("INSERT INTO amenagement (nom_am, pren_am, sexe_am, date_nais_am, provenance,mode_heber	,lieu_hab_am,fonct_am) VALUES (?,?,?,?,?,?,?,?)");
        $affectedLines = $statement->execute([$nom, $prenom, $sexe, $dateNais, $provenance, $mode, $domicile, $fonction]);

        return ($affectedLines > 0);
    }

}

// function getAmenages(): array
// {
//      
//         $statement = $this->connection->getConnection()->prepare('SELECT * FROM amenagement ORDER BY id_am DESC');
//         $statement->execute();

//         $amenages = [];
//         while (($row = $statement->fetch())) {
//             $amenage = new Amenage();
//             $amenage->idAm = $row['id_am'];
//             $amenage->nomAm = $row['nom_am'];
//             $amenage->prenAm = $row['pren_am'];
//             $amenage->provenance = $row['provenance'];
//             $amenage->dateNais = $row['date_nais_am'];
//             $amenage->sexe = $row['sexe_am'];
//             $amenage->lieuHab = $row['lieu_hab_am'];
//             $amenage->fonct = $row['fonct_am'];
//             $amenage->modeHeb = $row['mode_heber'];

//             $amenages[] = $amenage;
//         }

//     }
//     return $amenages;

// }




// function updateAmenage($nom, $prenom, $sexe, $dateNais, $provenance, $mode, $domicile, $fonction, $id): bool
// {
//      
//         $statement = $this->connection->getConnection()->prepare(
//             'UPDATE amenagement SET nom_am = ?, pren_am = ?, sexe_am = ?, date_nais_am = ?, provenance = ?, mode_heber=?, lieu_hab_am=?,fonct_am=? WHERE id_am = ?'
//         );
//         $affectedLines = $statement->execute([$nom, $prenom, $sexe, $dateNais, $provenance, $mode, $domicile, $fonction, $id]);

//     }
//     return ($affectedLines > 0);
// }

// function deleteAmenage($id)
// {
//      
//         $statement = $this->connection->getConnection()->prepare('DELETE FROM amenagement WHERE id_am =?');
//         $statement->execute([$id]);
//     }
// }

// ?>