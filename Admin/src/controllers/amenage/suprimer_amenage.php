<?php
namespace Application\Controllers\Amenage;

require_once('src/models/amenage.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Amenage\AmenageRepository;

class SupprimerAmenage
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $AmenageRepository = new AmenageRepository;
        $AmenageRepository->connection = new DatabaseConnection;
        $AmenageRepository->deleteAmenage($id);

        header('location: index.php?action=amenage/amenage');
    }
}