<?php
namespace Application\Controllers\PosterOffre;
require_once('src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\offreRepository;

class PosterOffre
{
    public function execute()
    {
        $nom = null;
        $prenom = null;
        $email = null;
        $numero = null;
        $service = null;
        $competence = null;
        $description = null;
        $photo = null;

        if (
            isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['numero']) && !empty($_POST['numero']) && isset($_POST['service']) &&
            !empty($_POST['service']) && isset($_POST['competence']) && !empty($_POST['competence']) && isset($_POST['description']) && !empty($_POST['description'])
        ) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];
            $service = $_POST['service'];
            $competence = $_POST['competence'];
            $description = $_POST['description'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        // Offres
        $offreRepository = new offreRepository;
        $offreRepository->connection = new DatabaseConnection;
        $offres = $offreRepository->getoffres();

        $success = $offreRepository->createOffreAttente($nom, $prenom, $email, $numero, $service, $competence, $description);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter cett offre !');
        } else {
            header('Location: index.php?action=succes');
        }


    }
}