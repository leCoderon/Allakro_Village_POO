<?php
namespace Application\Controllers\CentreSante;


require_once('src/models/centre_sante.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\CentreSante\centreSanteRepository;

class CentreSante
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        // Centre de santé
        $centreSanteRepository = new centreSanteRepository;
        $centreSanteRepository->connection = new DatabaseConnection;
        $centres = $centreSanteRepository->getCentres();

        require('templates/centre_sante.php');
    }
}