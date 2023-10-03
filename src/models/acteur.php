<?php
// require_once('src/lib/bdConnection.php');
namespace Application\Models\Acteur;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class acteurRepository
{
    public DatabaseConnection $connection;
    public function getActeur($email)
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM acteur WHERE email_act = ?');
        $affectedLines = $statement->execute([$email]);

        if ($affectedLines == 1) {
            $data = $statement->fetch();
            return $data;
        } else {
            return false;
        }

    }

    public function createActeur($nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction, $password): bool
    {
        $statement = $this->connection->getConnection()->prepare("INSERT INTO acteur (nom_act, pren_act, civ_act, sexe_act, date_nais_act,email_act,nbr_enfant,tel_act,fonct_act, mot_pass_act) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $affectedLines = $statement->execute([$nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction, $password]);

        return ($affectedLines > 0);
    }
}