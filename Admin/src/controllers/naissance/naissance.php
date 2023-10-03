<?php
namespace Application\Controllers\Naissance;
require_once('./src/models/naissance.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Naissance\NaissanceRepository;

class Naissance
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        // Naissances
        $NaissanceRepository = new NaissanceRepository;
        $NaissanceRepository->connection = new DatabaseConnection;
        $naissances = $NaissanceRepository->getNaissances();

        require('./templates/naissance/naissance.php');
    }
}