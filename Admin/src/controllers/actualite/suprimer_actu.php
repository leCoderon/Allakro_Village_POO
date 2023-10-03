<?php
namespace Application\Controllers\Actualite;

require_once('src/models/actualite.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Actualite\ActualiteRepository;

class SuprimerActualite
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $ActualiteRepository = new ActualiteRepository;
        $ActualiteRepository->connection = new DatabaseConnection;

        $ActualiteRepository->deleteActualite($id);

        header('location: index.php?action=actualite/actualite');
    }
}