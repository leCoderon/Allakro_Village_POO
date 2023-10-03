<?php
namespace Application\Models\OffreAttente;
require_once('src/lib/bdConnection.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Offre
{
    public string $idOff;
    public string $nomOff;
    public string $prenOff;
    public string $emailOff;
    public string $servOff;
    public string $qualifOff;
    public string $telOff;
    public string $photoOff;
    public string $descOff;
    public string $dateOff;

}

class OffreAttenteRepository
{
    public DatabaseConnection $connection;

    public function getOffresAttentes(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `offre_attente` ORDER BY id_off DESC');
        $statement->execute();

        $offre_attentes = [];
        while (($row = $statement->fetch())) {
            $offre_attente = new Offre();
            $offre_attente->idOff = $row['id_off'];
            $offre_attente->nomOff = $row['nom_off'];
            $offre_attente->prenOff = $row['pren_off'];
            $offre_attente->emailOff = $row['email_off'];
            $offre_attente->servOff = $row['serv_off'];
            $offre_attente->qualifOff = $row['qualif_off'];
            $offre_attente->telOff = $row['tel_off'];
            // $offre->photoOff = $row['photo_off'];
            $offre_attente->descOff = $row['desc_off'];
            $offre_attente->dateOff = $row['date_off'];


            $offre_attentes[] = $offre_attente;
        }


        return $offre_attentes;

    }

    // function getoffre(string $id): Offre
// {
//      
//         $statement = $this->connection->getConnection()->prepare('SELECT * FROM `offre` WHERE id_off = ?');
//         $statement->execute([$id]);

    //         $row = $statement->fetch();
//         $offre = new Offre();
//         $offre->idOff = $row['id_off'];
//         $offre->nomOff = $row['nom_off'];
//         $offre->prenOff = $row['pren_off'];
//         $offre->emailOff = $row['email_off'];
//         $offre->servOff = $row['serv_off'];
//         $offre->qualifOff = $row['qualif_off'];
//         $offre->telOff = $row['tel_off'];
//         // $offre->photoOff = $row['photo_off'];
//         $offre->descOff = $row['desc_off'];
//         $offre->dateOff = $row['date_off'];
//     }

    //     return $offre;

    // }




    public function createOffre(string $nom, string $prenom, string $email, string $numero, string $service, string $competence, string $description, string $photo)
    {

        $statement = $this->connection->getConnection()->prepare('INSERT INTO offre(nom_off, pren_off, email_off, tel_off, serv_off, qualif_off,  desc_off,photo_off, date_off) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW())');
        $affectedLines = $statement->execute([$nom, $prenom, $email, $numero, $service, $competence, $description, $photo]);


        return ($affectedLines > 0);
    }
    public function deleteOffreAttente($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM offre_attente WHERE id_off=?');
        $statement->execute([$id]);
    }

    // function updateOffre($nom, $prenom, $email, $numero, $service, $competence, $description, $photo, $id): bool
// {
//      
//         $statement = $this->connection->getConnection()->prepare(
//             'UPDATE offre SET nom_off = ?, pren_off = ?, email_off = ?, tel_off = ?, serv_off = ?, qualif_off = ?, desc_off =?, photo_off=? WHERE id_off  = ?'
//         );
//         $affectedLines = $statement->execute([$nom, $prenom, $email, $numero, $service, $competence, $description, $photo, $id]);

    //     }
//     return ($affectedLines > 0);
// }

}
?>