<?php
namespace Application\Models\CentreSante;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class CentreSante
{
    public string $idCentre;
    public string $nomCentre;
    public string $photoCentre;
    public string $localCentre;
    public string $serviceCentre;
    public string $descCentre;

}

class CentreSanteRepository
{
    public DatabaseConnection $connection;

    public function getCentres(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM `centreSante` ORDER BY id_centre DESC');
        $statement->execute();

        $centres = [];
        while (($row = $statement->fetch())) {
            $centre = new CentreSante();
            $centre->idCentre = $row['id_centre'];
            $centre->nomCentre = $row['nom_centre'];
            $centre->photoCentre = $row['photo_centre'];
            $centre->localCentre = $row['local_centre'];
            $centre->serviceCentre = $row['serv_centre'];
            $centre->descCentre = $row['desc_centre'];
            $centres[] = $centre;
        }


        return $centres;

    }

    public function createCentre($nomCentre, $localisation, $service, $descCentre, $photoCentre): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO centresante (nom_centre, local_centre, serv_centre, desc_centre, photo_centre) VALUES (?,?,?,?,?)");
        $affectedLines = $statement->execute([$nomCentre, $localisation, $service, $descCentre, $photoCentre]);

        return ($affectedLines > 0);
    }
    public function updateCentre($nomCentre, $localisation, $service, $descCentre, $photoCentre, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE centreSante SET nom_centre = ?, local_centre = ?, serv_centre = ?, desc_centre = ?, photo_centre = ? WHERE id_centre  = ?'
        );
        $affectedLines = $statement->execute([$nomCentre, $localisation, $service, $descCentre, $photoCentre, $id]);


        return ($affectedLines > 0);
    }

    public function deleteCentre($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM centresante WHERE id_centre=?');
        $statement->execute([$id]);

    }

}