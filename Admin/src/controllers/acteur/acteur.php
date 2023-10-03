<?php
namespace Application\Controllers\Acteur;

require_once('./src/models/acteur.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Acteur\ActeurRepository;

class Acteur
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $acteurRepository = new ActeurRepository;
        $acteurRepository->connection = new DatabaseConnection;
        $acteurs =  $acteurRepository->getActeurs();

        require('./templates/acteur/acteur.php');
    }
}