<?php
namespace Application\Controllers\Maladie;

require_once('src/models/maladie.php');

use Application\Models\Maladie\MaladieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class SupprimerMaladie
{
    public function execute()
    {
        $id = htmlspecialchars(strip_tags($_GET['id']));
        $MaladieRepository = new MaladieRepository;
        $MaladieRepository->connection = new DatabaseConnection;
        $MaladieRepository->deleteMaladie($id);

        header('location: index.php?action=maladie/maladie');
    }
}