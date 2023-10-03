<?php
namespace Application\Controllers\Homepage;

require_once('src/lib/bdConnection.php');
require_once('src/models/actualite.php');
require_once('src/models/naissance.php');
require_once('src/models/deces.php');
require_once('src/models/offre.php');
require_once('src/models/projet.php');

use Application\lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Actualite\actualiteRepository;
use Application\Models\Deces\decesRepository;
use Application\Models\Naissance\naissanceRepository;
use Application\Models\Projet\projetRepository;
use Application\Models\Offre\offreRepository;

 
class Homepage
{
    public function execute()
    { 
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

        // Offres
        $offreRepository = new offreRepository;
        $offreRepository->connection = new DatabaseConnection;
        $offres = $offreRepository->getoffres();

        // calling template
        require('templates/homepage.php');
    }
}