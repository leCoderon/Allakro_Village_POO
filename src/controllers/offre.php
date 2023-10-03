<?php
 namespace Application\Controllers\Offre;
require_once('src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\offreRepository;

class Offre
{

    public function execute()
    {

        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        // Offres
        $offreRepository = new offreRepository;
        $offreRepository->connection = new DatabaseConnection;
        $offres = $offreRepository->getoffres();

        require('templates/offre.php');
    }
}