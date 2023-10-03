<?php
namespace Application\Controllers\NaissanceAttente;

require_once('./src/models/naissance_attente.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\NaissanceAttente\NaissanceAttentesRepository;

class NaissanceAttente
{
    public function execute()
    {
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        // Naissances
        $NaissanceAttente = new NaissanceAttentesRepository;
        $NaissanceAttente->connection = new DatabaseConnection;
        $naissance_attentes = $NaissanceAttente->getNaissancesAttente();

        require('./templates/naissance_attente/naissance_attente.php');
    }
}