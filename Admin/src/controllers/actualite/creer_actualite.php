<?php
namespace Application\Controllers\Actualite;

require_once('src/models/actualite.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Actualite\ActualiteRepository;

class CreerActualite
{
    public function execute()
    {
        $titreActu = null;
        $descActu = null;
        $photoActu = null;
        $dateActu = null;
        $categorieActu = null;

        if (
            isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description'])
            && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['date']) && !empty($_POST['date'])
            && isset($_POST['categorie']) && !empty($_POST['categorie'])

        ) {
            $titreActu = $_POST['titre'];
            $descActu = $_POST['description'];
            $photoActu = $_POST['image'];
            $dateActu = $_POST['date'];
            $categorieActu = $_POST['categorie'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $ActualiteRepository = new ActualiteRepository;
        $ActualiteRepository->connection = new DatabaseConnection;
        $success = $ActualiteRepository->createActualite($titreActu, $descActu, $photoActu, $dateActu, $categorieActu);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=actualite/actualite');
        }
    }
}