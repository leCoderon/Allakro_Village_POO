<?php
namespace Application\Controllers\MaladieView;
require_once('src/models/maladie.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Maladie\maladieRepository;

class MaladieView
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: index.php?action=login');
        }

        // Maladie
        $id = $_GET['id'];
        $maladieRepository = new maladieRepository;
        $maladieRepository->connection = new DatabaseConnection;
        $maladie = $maladieRepository->getMaladie($id);

        require('templates/maladie_view.php');
    }
}