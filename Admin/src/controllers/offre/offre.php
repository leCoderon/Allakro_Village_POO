<?php
namespace Application\Controllers\Offre;
require_once('./src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\OffreRepository;

class Offre
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $OffreRepository = new OffreRepository;
        $OffreRepository->connection = new DatabaseConnection;
        $offres = $OffreRepository->getOffres();

        require('./templates/offre/offre.php');
    }
}