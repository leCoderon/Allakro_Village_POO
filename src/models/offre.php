<?php
namespace Application\Models\Offre;
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

class offreRepository{
    public  $connection;
  function getoffres(): array
{
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `offre` ORDER BY id_off DESC');
        $statement->execute();

        $offres = [];
        while (($row = $statement->fetch())) {
            $offre = new Offre();
            $offre->idOff = $row['id_off'];
            $offre->nomOff = $row['nom_off'];
            $offre->prenOff = $row['pren_off'];
            $offre->emailOff = $row['email_off'];
            $offre->servOff = $row['serv_off'];
            $offre->qualifOff = $row['qualif_off'];
            $offre->telOff = $row['tel_off'];
            // $offre->photoOff = $row['photo_off'];
            $offre->descOff = $row['desc_off'];
            $offre->dateOff = $row['date_off'];


            $offres[] = $offre;
        }

    return $offres;

}
function getoffre(string $id): Offre
{
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `offre` WHERE id_off = ?');
        $statement->execute([$id]);

        $row = $statement->fetch();
        $offre = new Offre();
        $offre->idOff = $row['id_off'];
        $offre->nomOff = $row['nom_off'];
        $offre->prenOff = $row['pren_off'];
        $offre->emailOff = $row['email_off'];
        $offre->servOff = $row['serv_off'];
        $offre->qualifOff = $row['qualif_off'];
        $offre->telOff = $row['tel_off'];
        // $offre->photoOff = $row['photo_off'];
        $offre->descOff = $row['desc_off'];
        $offre->dateOff = $row['date_off'];
    

    return $offre;

}


function createOffreAttente(string $nom, string $prenom, string $email, string $numero, string $service, string $competence, string $description)
{
        $statement = $this->connection->getConnection()->prepare('INSERT INTO offre_attente(nom_off, pren_off, email_off, tel_off, serv_off, qualif_off,  desc_off, date_off) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');
        $affectedLines = $statement->execute([$nom, $prenom, $email, $numero, $service, $competence, $description]);

    
    return ($affectedLines > 0);
}  
}

?>