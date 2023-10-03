<?php
namespace Application\Models\Maladie;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Maladie
{
    public string $idMal;
    public string $libMal;
    public string $descMal;
    public string $photoMal;
}

class MaladieRepository
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


    public function createMaladie($nomMal, $description, $image): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO maladie (lib_mal, desc_mal, photo_mal) VALUES (?,?,?)");
        $affectedLines = $statement->execute([$nomMal, $description, $image]);

        return ($affectedLines > 0);
    }

    public function updateMaladie($nomMal, $description, $image, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE maladie SET lib_mal = ?, desc_mal = ?, photo_mal = ? WHERE id_mal  = ?'
        );
        $affectedLines = $statement->execute([$nomMal, $description, $image, $id]);


        return ($affectedLines > 0);
    }

    public function deleteMaladie($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM maladie WHERE id_mal=?');
        $statement->execute([$id]);
    }
}