<?php
namespace Application\Controllers\Maladie;
require_once('./src/models/maladie.php');

use Application\Models\Maladie\MaladieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Maladie
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $MaladieRepository = new MaladieRepository;
        $MaladieRepository->connection = new DatabaseConnection;
        $maladies = $MaladieRepository->getMaladies();

        require('./templates/maladie/maladie.php');
    }
}