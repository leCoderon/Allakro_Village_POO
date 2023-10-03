<?php
namespace Application\Models\Pharmacie;
require_once('src/lib/bdConnection.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Pharmacie
{
    public string $idPharm;
    public string $nomPharm;
    public string $photoPharm;
    public string $localPharm;
    public string $periodGard;
    public string $descPharm;

}

class pharmacieRepository
{
    public DatabaseConnection $connection;

    public function getPharmacies(): array
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `pharmacie` ORDER BY id_phar DESC');
        $statement->execute();

        $Pharmacies = [];
        while (($row = $statement->fetch())) {
            $pharmacie = new Pharmacie();
            $pharmacie->idPharm = $row['id_phar'];
            $pharmacie->nomPharm = $row['nom_phar'];
            $pharmacie->photoPharm = $row['photo_phar'];
            $pharmacie->localPharm = $row['local_phar'];
            $pharmacie->periodGard = $row['period_gard'];
            $pharmacie->descPharm = $row['desc_phar'];

            $Pharmacies[] = $pharmacie;
        }

        return $Pharmacies;

    }
}
