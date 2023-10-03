<?php
namespace Application\Controllers\Homepage;
require('src/lib/bdConnection.php');
require('./src/models/naissance_attente.php');
require('./src/models/offre_attente.php');
require('./src/models/deces_attente.php');
use Application\Models\NaissanceAttente\NaissanceAttentesRepository;
use Application\Models\OffreAttente\OffreAttenteRepository;
use Application\Models\DecesAttente\DecesAttenteRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;


class Homepage
{
    public function execute()
    {
        // NaissancesAttente
        $NaissanceAttentesRepository = new NaissanceAttentesRepository;
        $NaissanceAttentesRepository->connection = new DatabaseConnection;
        $naissance_attentes =  $NaissanceAttentesRepository->getNaissancesAttente();

        // // OffresAttente
        $OffreAttenteRepository = new OffreAttenteRepository;
        $OffreAttenteRepository->connection = new DatabaseConnection;
        $offre_attentes = $OffreAttenteRepository->getOffresAttentes();

        // // DecesAttente
        $DecesAttenteRepository = new DecesAttenteRepository;
        $DecesAttenteRepository->connection = new DatabaseConnection;
        $deces_attentes = $DecesAttenteRepository->getDecesAttente();


        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        require('templates/homepage.php');
    }
}