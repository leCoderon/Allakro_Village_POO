<?php
namespace Application\Controllers\OffreView;

require_once('src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\offreRepository;

class OffreView
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header("location: templates/login.php");
        }

        // Offres
        $id = $_GET['id'];
        $offreRepository = new offreRepository;
        $offreRepository->connection = new DatabaseConnection;
        $offre = $offreRepository->getoffre($id);

        require('templates/offre_view.php');
    }
}