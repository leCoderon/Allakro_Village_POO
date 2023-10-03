<?php
namespace Application\Controllers\Naissance;

require_once('src/models/naissance.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Naissance\NaissanceRepository;

class SupprimerNaissance
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        // Naissances
        $NaissanceRepository = new NaissanceRepository;
        $NaissanceRepository->connection = new DatabaseConnection;
        $success = $NaissanceRepository->deleteNaissance($id);

        if (!$success) {
            throw new \Exception('Impossible de suprimer cet élément!');
        } else {
            header('Location: index.php?action=naissance/naissance');
        }
    }
}
// header('location: index.php?action=naissance/naissance');