<?php
namespace Application\Controllers\Demenage;

require_once('./src/models/demenage.php');

use Application\Models\Demenage\DemenageRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Demenage
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $DemenageRepository = new DemenageRepository;
        $DemenageRepository->connection = new DatabaseConnection;
        $demenages = $DemenageRepository->getDemenages();

        require('./templates/demenage/demenage.php');
    }
}