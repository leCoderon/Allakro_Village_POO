<?php
namespace Application\Controllers\Amenage;
require_once('./src/models/amenage.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Amenage\AmenageRepository;

class Amenage
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $AmenageRepository = new AmenageRepository;
        $AmenageRepository->connection = new DatabaseConnection;
        $amenages = $AmenageRepository->getAmenages();

        require('./templates/amenage/amenage.php');
    }
}