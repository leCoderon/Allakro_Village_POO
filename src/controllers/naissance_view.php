<?php

namespace Application\Controllers\NaissanceView;

require_once('src/models/naissance.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Naissance\naissanceRepository;
class NaissanceView
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        // Naissance
        $id = $_GET['id'];
        $naissancesRepository = new naissanceRepository;
        $naissancesRepository->connection = new DatabaseConnection;
        $naissance = $naissancesRepository->getNaissance($id);

        require('templates/naissance_view.php');


    }
}