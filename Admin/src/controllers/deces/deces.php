<?php
namespace Application\Controllers\Deces;

require_once('./src/models/deces.php');

use Application\Models\Deces\DecesRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Deces
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $DecesRepository = new DecesRepository;
        $DecesRepository->connection = new DatabaseConnection;
        $deces = $DecesRepository->getDeces();

        require('./templates/deces/deces.php');
    }
}