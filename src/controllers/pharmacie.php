<?php

namespace Application\Controllers\Pharmacie;

require_once('src/models/pharmacie.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Pharmacie\pharmacieRepository;
class Pharmacie
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }
        // Pharmacie
        $pharmacieRepository = new pharmacieRepository;
        $pharmacieRepository->connection = new DatabaseConnection;
        $pharmacies = $pharmacieRepository->getPharmacies();

        require('templates/pharmacie.php');
    }
}