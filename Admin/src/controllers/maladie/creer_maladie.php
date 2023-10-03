<?php
namespace Application\Controllers\Maladie;

require_once('src/models/maladie.php');

use Application\Models\Maladie\MaladieRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class CreerMaladie
{
    public function execute()
    {
        $nomMal = null;
        $description = null;
        $image = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['description']) && !empty($_POST['description'])
            && isset($_POST['image']) && !empty($_POST['image'])
        ) {
            $nomMal = $_POST['nom'];
            $description = $_POST['description'];
            $image = $_POST['image'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $MaladieRepository = new MaladieRepository;
        $MaladieRepository->connection = new DatabaseConnection;
        $success = $MaladieRepository->createMaladie($nomMal, $description, $image);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=maladie/maladie');
        }
    }
}