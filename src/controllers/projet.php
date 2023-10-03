<?php
namespace Application\Controllers\Projet;

require_once('src/models/projet.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Projet\projetRepository;
class Projet
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        // Projets
        $projetRepository = new projetRepository;
        $projetRepository->connection = new DatabaseConnection;
        $projets = $projetRepository->getProjets();

        require('templates/projet.php');
    }
}