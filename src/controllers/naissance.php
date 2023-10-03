<?php
namespace Application\Controllers\Naissance;

require_once('src/models/naissance.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Naissance\naissanceRepository;
class Naissance
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }
        // Naissance
        $naissancesRepository = new naissanceRepository;
        $naissancesRepository->connection = new DatabaseConnection;
        $naissances = $naissancesRepository->getNaissances();


        require('templates/naissance.php');
    }
}