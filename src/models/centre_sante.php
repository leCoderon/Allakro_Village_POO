<?php
namespace Application\Models\CentreSante;
require_once('src/lib/bdConnection.php');
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

class centreSanteRepository
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

}
?>