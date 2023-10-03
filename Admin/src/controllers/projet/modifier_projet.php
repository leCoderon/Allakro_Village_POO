<?php
namespace Application\Controllers\Projet;

require_once('src/models/projet.php');
use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Projet\ProjetRepository;

class ModifierProjet
{
    public function execute()
    {
        $nomProjet = null;
        $descProjet = null;
        $date = null;
        $auteur = null;

        $id = $_GET['id'];

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['description']) && !empty($_POST['description'])
            && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['auteur']) && !empty($_POST['auteur'])

        ) {
            $nomProjet = $_POST['nom'];
            $descProjet = $_POST['description'];
            $date = $_POST['date'];
            $auteur = $_POST['auteur'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $ProjetRepository = new ProjetRepository;
        $ProjetRepository->connection = new DatabaseConnection;
        $success = $ProjetRepository->updateProjet($nomProjet, $descProjet, $auteur, $date, $id);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter!');
        } else {
            header('Location: index.php?action=succes&destination=projet/projet');
        }
    }
}