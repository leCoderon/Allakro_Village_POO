<?php
namespace Application\Controllers\Maladie;
require_once('src/models/maladie.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Maladie\maladieRepository;

class Maladie
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }

        // Maladie
        $maladieRepository = new maladieRepository;
        $maladieRepository->connection = new DatabaseConnection;
        $maladies = $maladieRepository->getMaladies();

        require('templates/maladie.php');
    }
}