<?php

namespace Application\Controllers\Deces;

require_once('src/models/deces.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Deces\decesRepository;
class Deces
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }

        // Deces
        $decesRepository = new decesRepository;
        $decesRepository->connection = new DatabaseConnection;
        $deces = $decesRepository->getDeces();

        require('templates/deces.php');
    }
}