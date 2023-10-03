<?php
namespace Application\Controllers\OffreAttente;

require_once('./src/models/offre_attente.php');

use Application\Models\OffreAttente\OffreAttenteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class OffreAttente
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $OffreAttenteRepository = new OffreAttenteRepository;
        $OffreAttenteRepository->connection = new DatabaseConnection;
        $offre_attentes = $OffreAttenteRepository->getOffresAttentes();

        require('./templates/offre_attente/offre_attente.php');
    }
}