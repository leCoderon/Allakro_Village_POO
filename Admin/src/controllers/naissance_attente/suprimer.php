<?php
namespace Application\Controllers\NaissanceAttente;

require_once('src/models/naissance_attente.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\NaissanceAttente\NaissanceAttentesRepository;

class SupprimerNaissanceAttente
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));

        // Naissances
        $NaissanceAttente = new NaissanceAttentesRepository;
        $NaissanceAttente->connection = new DatabaseConnection;
        $success =  $NaissanceAttente->deleteNaissanceAttente($id);

        if (!$success) {
            throw new \Exception('Impossible de suprimer cet élément!');
        } else {
            header('Location: index.php?action=naissance_attente/naissance_attente');
        }
    }
}
// header('location: index.php?action=naissance/naissance');