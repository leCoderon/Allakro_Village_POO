<?php
namespace Application\Models\Maladie;
require_once('src/lib/bdConnection.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Maladie
{
    public string $idMal;
    public string $libMal;
    public string $descMal;
    public string $photoMal;
}

class maladieRepository
{
    public DatabaseConnection $connection;

    public function getMaladies(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `maladie` ORDER by id_mal DESC');
        $statement->execute();

        $maladies = [];
        while (($row = $statement->fetch())) {
            $maladie = new Maladie();
            $maladie->idMal = $row['id_mal'];
            $maladie->libMal = $row['lib_mal'];
            $maladie->descMal = $row['desc_mal'];
            $maladie->photoMal = $row['photo_mal'];

            $maladies[] = $maladie;
        }

        return $maladies;

    }

    public function getMaladie($id): Maladie
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `maladie` WHERE id_mal = ?');
        $statement->execute([$id]);

        $row = $statement->fetch();
        $maladie = new Maladie();
        $maladie->idMal = $row['id_mal'];
        $maladie->libMal = $row['lib_mal'];
        $maladie->descMal = $row['desc_mal'];
        $maladie->photoMal = $row['photo_mal'];

        return $maladie;

    }
}
?>