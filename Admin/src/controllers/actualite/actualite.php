<?php
namespace Application\Controllers\Actualite;
require_once('./src/models/actualite.php');
use Application\Models\Actualite\ActualiteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Actualite
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $actualiteRepository = new ActualiteRepository;
        $actualiteRepository->connection = new DatabaseConnection;
        $actualites = $actualiteRepository->getActualites();

        require('./templates/actualite/actualites.php');
    }
}