<?php
namespace Application\Models\Projet;

require_once('src/lib/bdConnection.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Projet
{
    public string $idProj;
    public string $nomProj;
    public string $date;
    public string $auteur;
    public string $descProj;
    public string $photoProj;

}

class projetRepository
{
    public DatabaseConnection $connection;

    public function getProjets(): array
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `projet` ORDER BY id_proj DESC');
        $statement->execute();

        $projets = [];
        while (($row = $statement->fetch())) {
            $projet = new Projet();
            $projet->idProj = $row['id_proj'];
            $projet->nomProj = $row['lib_proj'];
            $projet->auteur = $row['auteur_proj'];
            $projet->descProj = $row['desc_proj'];
            $projet->date = $row['date_proj'];
            $projet->photoProj = $row['photo_proj'];


            $projets[] = $projet;
        }


        return $projets;

    }
    public function getProjet($id): Projet
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `projet` WHERE id_proj = ?');
        $statement->execute([$id]);
        $row = $statement->fetch();

        $projet = new Projet();
        $projet->idProj = $row['id_proj'];
        $projet->nomProj = $row['lib_proj'];
        $projet->auteur = $row['auteur_proj'];
        $projet->descProj = $row['desc_proj'];
        $projet->date = $row['date_proj'];
        $projet->photoProj = $row['photo_proj'];


        return $projet;

    }
}