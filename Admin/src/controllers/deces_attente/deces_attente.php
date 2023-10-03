<?php
namespace Application\Controllers\DecesAttente;

require_once('./src/models/deces_attente.php');

use Application\Models\DecesAttente\DecesAttenteRepository;
 use Application\Lib\DatabaseConnection\DatabaseConnection;

class DecesAttente
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $DecesRepository = new DecesAttenteRepository;
        $DecesRepository->connection = new DatabaseConnection;
        $deces_attentes = $DecesRepository->getDecesAttente();

        require('./templates/deces_attente/deces_attente.php');
    }
}