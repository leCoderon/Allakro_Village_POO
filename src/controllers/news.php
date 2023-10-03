<?php
namespace Application\Controllers\News;

require_once('src/models/actualite.php');
require_once('src/models/naissance.php');
require_once('src/models/projet.php');
require_once('src/models/deces.php');

use Application\lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Actualite\actualiteRepository;
use Application\Models\Deces\decesRepository;
use Application\Models\Naissance\naissanceRepository;
use Application\Models\Projet\projetRepository;

class News
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {

            header('location: templates/login.php');
        }

        // Naissance
        $naissancesRepository = new naissanceRepository;
        $naissancesRepository->connection = new DatabaseConnection;
        $naissances = $naissancesRepository->getNaissances();

        // Actualite
        $actualiteRepository = new actualiteRepository;
        $actualiteRepository->connection = new DatabaseConnection;
        $actualites = $actualiteRepository->getActualites();

        // Deces
        $decesRepository = new decesRepository;
        $decesRepository->connection = new DatabaseConnection;
        $deces = $decesRepository->getDeces();

        // Projets
        $projetRepository = new projetRepository;
        $projetRepository->connection = new DatabaseConnection;
        $projets = $projetRepository->getProjets();

        require('templates/news.php');
    }
}