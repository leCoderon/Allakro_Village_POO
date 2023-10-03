<?php
namespace Application\Models\Actualite;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Actualite
{
    public string $idActu;
    public string $titreActu;
    public string $descActu;
    public string $photoActu;
    public string $dateActu;
    public string $categorieActu;

}


class ActualiteRepository
{
    public DatabaseConnection $connection;

    public function getActualites(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM actualite ORDER BY id_actu DESC');
        $statement->execute();

        $actualites = [];
        while (($row = $statement->fetch())) {
            $actualite = new Actualite();
            $actualite->idActu = $row['id_actu'];
            $actualite->titreActu = $row['lib_actu'];
            $actualite->descActu = $row['desc_actu'];
            $actualite->photoActu = $row['photo_actu'];
            $actualite->dateActu = $row['date_actu'];
            $actualite->categorieActu = $row['cat_actu'];

            $actualites[] = $actualite;
        }


        return $actualites;

    }
    public function getActualite(string $id): Actualite
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM actualite WHERE id_actu = ?');
        $statement->execute([$id]);

        $row = $statement->fetch();
        $actualite = new Actualite();
        $actualite->idActu = $row['id_actu'];
        $actualite->titreActu = $row['lib_actu'];
        $actualite->descActu = $row['desc_actu'];
        $actualite->photoActu = $row['photo_actu'];
        $actualite->dateActu = $row['date_actu'];
        $actualite->categorieActu = $row['cat_actu'];

        return $actualite;
    }

    public function createActualite($titre, $description, $image, $date, $categorie): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO actualite (lib_actu, desc_actu, photo_actu, date_actu, cat_actu) VALUES (?,?,?,?,?)");
        $affectedLines = $statement->execute([$titre, $description, $image, $date, $categorie]);

        return ($affectedLines > 0);
    }


    public function updateActualite($titre, $description, $image, $date, $categorie, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE actualite SET lib_actu = ?, desc_actu = ?, photo_actu = ?, date_actu = ?, cat_actu = ? WHERE id_actu = ?'
        );
        $affectedLines = $statement->execute([$titre, $description, $image, $date, $categorie, $id]);


        return ($affectedLines > 0);
    }

    public function deleteActualite($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM actualite WHERE id_actu=?');
        $statement->execute([$id]);
    }

}