<?php
namespace Application\Controllers\ActualiteView;

require_once('src/models/actualite.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Actualite\actualiteRepository;

class ActualiteView
{
    public function execute()
    {

        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: index.php?action=login');
        }

        // Actualite
        $id = $_GET['id'];

        $actualiteRepository = new actualiteRepository;
        $actualiteRepository->connection = new DatabaseConnection;
        $actualite = $actualiteRepository->getActualite($id);
        
        require('templates/actualite_view.php');
    }
}