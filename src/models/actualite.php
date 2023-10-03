<?php
namespace Application\Models\Actualite;

require_once('src/lib/bdConnection.php');

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

class actualiteRepository
{
    public DatabaseConnection $connection;

    function getActualites(): array
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
    function getActualite(string $id): Actualite
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

}



?>