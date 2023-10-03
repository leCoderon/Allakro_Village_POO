<?php
namespace Application\Models\Acteur;

use Application\Lib\DatabaseConnection\DatabaseConnection;

class Acteur
{
    public string $idAct;
    public string $nomAct;
    public string $prenAct;
    public string $civAct;
    public string $dateNais;
    public string $sexe;
    public string $email;
    public string $nbrEnf;
    public string $tel;
    public string $fonct;

}

class ActeurRepository
{
    public DatabaseConnection $connection;

    public function getActeurs(): array
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM acteur ORDER BY id_act DESC');
        $statement->execute();

        $acteurs = [];
        while (($row = $statement->fetch())) {
            $acteur = new Acteur();
            $acteur->idAct = $row['id_act'];
            $acteur->nomAct = $row['nom_act'];
            $acteur->prenAct = $row['pren_act'];
            $acteur->civAct = $row['civ_act'];
            $acteur->dateNais = $row['date_nais_act'];
            $acteur->sexe = $row['sexe_act'];
            $acteur->email = $row['email_act'];
            $acteur->nbrEnf = $row['nbr_enfant'];
            $acteur->tel = $row['tel_act'];
            $acteur->fonct = $row['fonct_act'];

            $acteurs[] = $acteur;
        }


        return $acteurs;

    }

    public function createActeur($nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction): bool
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO acteur (nom_act, pren_act, civ_act, sexe_act, date_nais_act,email_act,nbr_enfant,tel_act,fonct_act) VALUES (?,?,?,?,?,?,?,?,?)");
        $affectedLines = $statement->execute([$nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction]);
        return ($affectedLines > 0);
    }


    public function updateActeur($nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction, $id): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            'UPDATE acteur SET nom_act = ?, pren_act = ?, civ_act = ?, sexe_act = ?, date_nais_act = ?, email_act=?,nbr_enfant=?,tel_act=?, fonct_act=? WHERE id_act = ?'
        );
        $affectedLines = $statement->execute([$nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction, $id]);


        return ($affectedLines > 0);
    }

    public function deleteActeur($id)
    {

        $statement = $this->connection->getConnection()->prepare('DELETE FROM acteur WHERE id_act =?');
        $statement->execute([$id]);

    }
}