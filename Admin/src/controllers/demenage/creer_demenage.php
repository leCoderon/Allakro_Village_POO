<?php
namespace Application\Controllers\Demenage;

require_once('src/models/demenage.php');


use Application\Models\Demenage\DemenageRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class CreerDemenage
{
    public function execute()
    {
        $nom = null;
        $prenom = null;
        $sexe = null;
        $dateNais = null;
        $destination = null;
        $domicile = null;
        $fonction = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])
            && isset($_POST['destination']) && !empty($_POST['destination']) && isset($_POST['sexe']) && !empty($_POST['sexe'])
            && isset($_POST['fonction']) && !empty($_POST['fonction']) && isset($_POST['domicile']) && !empty($_POST['domicile'])


        ) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $destination = $_POST['destination'];
            $dateNais = $_POST['date'];
            $fonction = $_POST['fonction'];
            $domicile = $_POST['domicile'];
            $sexe = $_POST['sexe'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $DemenageRepository = new DemenageRepository;
        $DemenageRepository->connection = new DatabaseConnection;
        $success = $DemenageRepository->createDemenage($nom, $prenom, $sexe, $dateNais, $destination, $domicile, $fonction);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=demenage/demenage');
        }
    }
}