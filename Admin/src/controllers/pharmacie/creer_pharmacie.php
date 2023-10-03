<?php
namespace Application\Controllers\Pharmacie;

require_once('src/models/pharmacie.php');

use Application\Models\Pharmacie\PharmacieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class CreerPharmacie
{
    public function execute()
    {
        $nomPharm = null;
        $descPharm = null;
        $photoPharm = null;
        $periodGard = null;
        $localisation = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['description']) && !empty($_POST['description'])
            && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['localisation']) && !empty($_POST['localisation'])
            && isset($_POST['periode']) && !empty($_POST['periode'])

        ) {
            $nomPharm = $_POST['nom'];
            $descPharm = $_POST['description'];
            $photoPharm = $_POST['image'];
            $localisation = $_POST['localisation'];
            $periodGard = $_POST['periode'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $PharmacieRepository = new PharmacieRepository;
        $PharmacieRepository->connection = new DatabaseConnection;
        $success = $PharmacieRepository->createPharmacie($nomPharm, $photoPharm, $localisation, $periodGard, $descPharm);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=pharmacie/pharmacie');
        }
    }
}