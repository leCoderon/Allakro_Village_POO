<?php
namespace Application\Controllers\Offre;

require_once('src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\OffreRepository;

class SupprimerOffre
{
    public function execute()
    {

        $id = htmlspecialchars(strip_tags($_GET['id']));
        $OffreRepository = new OffreRepository;
        $OffreRepository->connection = new DatabaseConnection;
        $OffreRepository->deleteOffre($id);

        header('location: index.php?action=offre/offre');
    }
}