<?php
namespace Application\Controllers\Amenage;

require_once('src/models/amenage.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Amenage\AmenageRepository;

class ModifierAmenage
{
    public function execute()
    {
        $nom = null;
        $prenom = null;
        $sexe = null;
        $dateNais = null;
        $provenance = null;
        $domicile = null;
        $mode = null;
        $fonction = null;

        $id = $_GET['id'];

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])
            && isset($_POST['provenance']) && !empty($_POST['provenance']) && isset($_POST['sexe']) && !empty($_POST['sexe'])
            && isset($_POST['mode']) && !empty($_POST['mode']) && isset($_POST['fonction']) && !empty($_POST['fonction'])
            && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['domicile']) && !empty($_POST['domicile'])


        ) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $provenance = $_POST['provenance'];
            $dateNais = $_POST['date'];
            $fonction = $_POST['fonction'];
            $mode = $_POST['mode'];
            $domicile = $_POST['domicile'];
            $sexe = $_POST['sexe'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $AmenageRepository = new AmenageRepository;
        $AmenageRepository->connection = new DatabaseConnection;
        $success = $AmenageRepository->updateAmenage($nom, $prenom, $sexe, $dateNais, $provenance, $mode, $domicile, $fonction, $id);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=amenage/amenage');
        }
    }
}