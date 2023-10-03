<?php
namespace Application\Controllers\Pharmacie;

require_once('src/models/pharmacie.php');

use Application\Models\Pharmacie\PharmacieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerPharmacie
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $PharmacieRepository = new PharmacieRepository;
        $PharmacieRepository->connection = new DatabaseConnection;
        $PharmacieRepository->deletePharmacie($id);

        header('location: index.php?action=pharmacie/pharmacie');
    }
}