<?php
namespace Application\Controllers\OffreAttente;

require_once('src/models/offre_attente.php');

use Application\Models\OffreAttente\OffreAttenteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerOffreAttente
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $OffreAttenteRepository = new OffreAttenteRepository;
        $OffreAttenteRepository->connection = new DatabaseConnection;
        $OffreAttenteRepository->deleteOffreAttente($id);

        header('location: index.php?action=offre_attente/offre_attente');
    }
}