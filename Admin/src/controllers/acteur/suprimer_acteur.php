<?php
namespace Application\Models\Acteur;
require_once('src/models/acteur.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Acteur\ActeurRepository;

class SupprimerActeur
{
    public function execute()
    {
        $acteurRepository = new ActeurRepository;
        $acteurRepository->connection = new DatabaseConnection;
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $acteurRepository->deleteActeur($id);

        header('location: index.php?action=acteur/acteur');
    }
}