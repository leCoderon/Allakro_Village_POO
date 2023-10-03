<?php
namespace Application\Controllers\Projet;

require_once('src/models/projet.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Projet\ProjetRepository;

class SuprimerProjet
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $ProjetRepository = new ProjetRepository;
        $ProjetRepository->connection = new DatabaseConnection;
        $ProjetRepository->deleteProjet($id);

        header('location: index.php?action=projet/projet');
    }
}