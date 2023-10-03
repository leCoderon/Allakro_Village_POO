<?php
namespace Application\Controllers\Deces;

require_once('src/models/deces.php');

use Application\Models\Deces\DecesRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerDeces
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $DecesRepository = new DecesRepository;
        $DecesRepository->connection = new DatabaseConnection;
        $DecesRepository->deleteDeces($id);

        header('location: index.php?action=deces/deces');
    }
}