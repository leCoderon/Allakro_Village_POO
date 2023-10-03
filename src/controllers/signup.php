<?php
namespace Application\Controllers\Signup;
require_once('src/models/acteur.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Acteur\acteurRepository;
class Signup
{
    public function execute()
    {
        $nom = null;
        $prenom = null;
        $civilite = null;
        $sexe = null;
        $dateNais = null;
        $email = null;
        $nbrEnf = null;
        $numero = null;
        $fonction = null;
        $password = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])
            && isset($_POST['civilite']) && !empty($_POST['civilite']) && isset($_POST['sexe']) && !empty($_POST['sexe'])
            && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['fonction']) && !empty($_POST['fonction'])
            && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['enfant']) && !empty($_POST['enfant'])
            && isset($_POST['numero']) && !empty($_POST['numero']) && isset($_POST['password']) && !empty($_POST['password'])

        ) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $civilite = $_POST['civilite'];
            $dateNais = $_POST['date'];
            $fonction = $_POST['fonction'];
            $numero = $_POST['numero'];
            $email = $_POST['email'];
            $nbrEnf = $_POST['enfant'];
            $sexe = $_POST['sexe'];
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        // Creating new actor
        $acteurRepository = new acteurRepository;
        $acteurRepository->connection = new DatabaseConnection;


        $success = $acteurRepository->createActeur($nom, $prenom, $civilite, $sexe, $dateNais, $email, $nbrEnf, $numero, $fonction, $hash);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: templates/login.php');
        }
    }
}