<?php
namespace Application\Controllers\Demenage;

require_once('src/models/demenage.php');

use Application\Models\Demenage\DemenageRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerDemenage
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $DemenageRepository = new DemenageRepository;
        $DemenageRepository->connection = new DatabaseConnection;
        $DemenageRepository->deleteDemenage($id);

        header('location: index.php?action=demenage/demenage');
    }
}