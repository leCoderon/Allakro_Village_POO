<?php
namespace Application\Controllers\DecesView;

require_once('src/models/deces.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Deces\decesRepository;
class DecesView
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        // Deces
        $id = $_GET['id'];
        $decesRepository = new decesRepository;
        $decesRepository->connection = new DatabaseConnection;
        $deces = $decesRepository->getDece($id);

        require('templates/deces_view.php');

    }
}