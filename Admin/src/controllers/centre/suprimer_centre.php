<?php
namespace Application\Controllers\Centre;

require_once('src/models/centre.php');

use Application\Models\CentreSante\CentreSanteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerCentre
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $CentreSanteRepository = new CentreSanteRepository;
        $CentreSanteRepository->connection = new DatabaseConnection;
        $CentreSanteRepository->deleteCentre($id);

        header('location: index.php?action=centre/centre');
    }
}