<?php
namespace Application\Controllers\Offre;

require_once('src/models/offre.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\Offre\OffreRepository;

class ModifierOffre
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

        $id = $_GET['id'];

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
            $photo = $_POST['photo'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $OffreRepository = new OffreRepository;
        $OffreRepository->connection = new DatabaseConnection;
        $success = $OffreRepository->updateOffre($nom, $prenom, $email, $numero, $service, $competence, $description, $photo, $id);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter cette offre !');
        } else {
            header('Location: index.php?action=succes&destination=offre/offre');
        }
    }
}