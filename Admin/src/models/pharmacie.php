<?php
namespace Application\Models\Pharmacie;

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

class PharmacieRepository
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

    public function createPharmacie($nomPharm, $photoPharm, $localisation, $periodGard, $descPharm): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO pharmacie (nom_phar, photo_phar, local_phar, period_gard, desc_phar) VALUES (?,?,?,?,?)");
        $affectedLines = $statement->execute([$nomPharm, $photoPharm, $localisation, $periodGard, $descPharm]);

        return ($affectedLines > 0);
    }

    public function updatePharmacie($nomPharm, $photoPharm, $localisation, $periodGard, $descPharm, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE pharmacie SET nom_phar = ?, photo_phar = ?, local_phar = ?, period_gard = ?, desc_phar = ? WHERE id_phar  = ?'
        );
        $affectedLines = $statement->execute([$nomPharm, $photoPharm, $localisation, $periodGard, $descPharm, $id]);


        return ($affectedLines > 0);
    }

    public function deletePharmacie($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM pharmacie WHERE id_phar=?');
        $statement->execute([$id]);
    }
}
?>