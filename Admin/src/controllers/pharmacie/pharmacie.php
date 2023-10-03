<?php
namespace Application\Controllers\Pharmacie;

require_once('./src/models/pharmacie.php');

use Application\Models\Pharmacie\PharmacieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Pharmacie
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $PharmacieRepository =  new PharmacieRepository;
        $PharmacieRepository->connection = new DatabaseConnection;
        $pharmacies = $PharmacieRepository->getPharmacies();

        require('./templates/pharmacie/pharmacie.php');
    }
}