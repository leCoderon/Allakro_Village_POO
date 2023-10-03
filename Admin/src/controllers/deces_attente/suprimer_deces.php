<?php
namespace Application\Controllers\DecesAttente;

require_once('src/models/deces_attente.php');

use Application\Models\DecesAttente\DecesAttenteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerDecesAttente
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $DecesRepository = new DecesAttenteRepository;
        $DecesRepository->connection = new DatabaseConnection;
        $DecesRepository->deleteDecesAttente($id);

        header('location: index.php?action=deces_attente/deces_attente');
    }
}