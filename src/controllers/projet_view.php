<?php
namespace Application\Controllers\ProjetView;

require_once('src/models/projet.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Projet\projetRepository;

class ProjetView
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }

        // Projets
        $id = $_GET['id'];
        $projetRepository = new projetRepository;
        $projetRepository->connection = new DatabaseConnection;
        $projet = $projetRepository->getProjet($id);

        require('templates/projet_view.php');
    }
}