<?php
namespace Application\Models\Demenage;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Demenage
{
    public string $id;
    public string $nom;
    public string $prenom;
    public string $dateNais;
    public string $destination;
    public string $sexe;
    public string $lieuHab;
    public string $fonct;

}

class DemenageRepository
{
    public DatabaseConnection $connection;

    public function getDemenages(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM demenagement ORDER BY id_dem DESC');
        $statement->execute();

        $demenages = [];
        while (($row = $statement->fetch())) {
            $demenage = new Demenage();
            $demenage->id = $row['id_dem'];
            $demenage->nom = $row['nom_dem'];
            $demenage->prenom = $row['pren_dem'];
            $demenage->destination = $row['nouveau_dem'];
            $demenage->dateNais = $row['date_nais_dem'];
            $demenage->sexe = $row['sexe_dem'];
            $demenage->lieuHab = $row['lieu_hab_dem'];
            $demenage->fonct = $row['fonct_dem'];

            $demenages[] = $demenage;
        }


        return $demenages;

    }


    public function createDemenage($nom, $prenom, $sexe, $dateNais, $destination, $domicile, $fonction): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO demenagement (nom_dem, pren_dem, sexe_dem, date_nais_dem, nouveau_dem, lieu_hab_dem,fonct_dem) VALUES (?,?,?,?,?,?,?)");
        $affectedLines = $statement->execute([$nom, $prenom, $sexe, $dateNais, $destination, $domicile, $fonction]);

        return ($affectedLines > 0);
    }


    public function updateDemenage($nom, $prenom, $sexe, $dateNais, $destination, $domicile, $fonction, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE demenagement SET nom_dem = ?, pren_dem = ?, sexe_dem = ?, date_nais_dem = ?, nouveau_dem = ?, lieu_hab_dem = ?, fonct_dem = ? WHERE id_dem = ?'
        );
        $affectedLines = $statement->execute([$nom, $prenom, $sexe, $dateNais, $destination, $domicile, $fonction, $id]);


        return ($affectedLines > 0);
    }

    public function deleteDemenage($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM demenagement WHERE id_dem =?');
        $statement->execute([$id]);
    }
}

?>