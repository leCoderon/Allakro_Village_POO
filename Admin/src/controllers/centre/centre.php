<?php
namespace Application\Controllers\Centre;

require_once('./src/models/centre.php');

use Application\Models\CentreSante\CentreSanteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Centre
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }
        $CentreSanteRepository = new CentreSanteRepository;
        $CentreSanteRepository->connection = new DatabaseConnection;
        $centres = $CentreSanteRepository->getCentres();

        require('./templates/centre/centre.php');
    }
}