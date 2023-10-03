<?php
namespace Application\Controllers\Projet;
require_once('./src/models/projet.php');

use Application\Models\Projet\ProjetRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class Projet
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $projetRepository = new projetRepository;
        $projetRepository->connection = new DatabaseConnection;
        $projets = $projetRepository->getProjet();

        require('./templates/projet/projet.php');
    }
}