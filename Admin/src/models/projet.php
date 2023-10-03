<?php
namespace Application\Models\Projet;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Projet
{
    public string $idProj;
    public string $nomProj;
    public string $date;
    public string $auteur;
    public string $descProj;

}

class ProjetRepository
{
    public DatabaseConnection $connection;

    public function getProjet(): array
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


            $projets[] = $projet;
        }


        return $projets;

    }

    public function createProjet($nomProjet, $descProjet, $auteur, $date): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO projet (lib_proj, desc_proj, auteur_proj, date_proj) VALUES (?,?,?,?)");
        $affectedLines = $statement->execute([$nomProjet, $descProjet, $auteur, $date]);

        return ($affectedLines > 0);
    }

    public function updateProjet($nomProjet, $descProjet, $auteur, $date, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE projet SET lib_proj = ?, desc_proj = ?, auteur_proj = ?, date_proj = ? WHERE id_proj  = ?'
        );
        $affectedLines = $statement->execute([$nomProjet, $descProjet, $auteur, $date, $id]);


        return ($affectedLines > 0);
    }

    public function deleteProjet($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM projet WHERE id_proj=?');
        $statement->execute([$id]);
    }
}