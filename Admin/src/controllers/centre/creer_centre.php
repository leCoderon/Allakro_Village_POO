<?php
namespace Application\Controllers\Centre;

require_once('src/models/centre.php');

use Application\Models\CentreSante\CentreSanteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class CreerCentre
{
    public function execute()
    {
        $nomCentre = null;
        $descCentre = null;
        $photoCentre = null;
        $localisation = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis perspiciatis earum aperiam fuga sint error explicabo animi consequuntur ex. Id reprehenderit sapiente vitae. Beatae corrupti cupiditate, saepe maiores vero delectus!
        ';
        $service = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['description']) && !empty($_POST['description'])
            && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['localisation']) && !empty($_POST['localisation'])
            && isset($_POST['service']) && !empty($_POST['service'])

        ) {
            $nomCentre = $_POST['nom'];
            $$descCentre = $_POST['description'];
            $photoCentre = $_POST['image'];
            $localisation = $_POST['localisation'];
            $service = $_POST['service'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $CentreSanteRepository = new CentreSanteRepository;
        $CentreSanteRepository->connection = new DatabaseConnection;
        $success = $CentreSanteRepository->createCentre($nomCentre, $localisation, $service, $descCentre, $photoCentre);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=centre/centre');
        }
    }
}