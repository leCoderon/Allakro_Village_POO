<?php
namespace Application\Controllers\Deces;

require_once('src/models/deces.php');

use Application\Models\Deces\DecesRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class ModifierDeces
{
    public function execute()
    {
        $nomDec = null;
        $prenomDec = null;
        $sexe = null;
        $dateNais = null;
        $dateDec = null;
        $lieuDec = null;
        $causeDec = null;
        $nomParent = null;
        $prenomParent = null;
        $lieuHabDec = null;
        $fonctDec = null;

        $id = $_GET['id'];

        if (
            isset($_POST['nomDec']) && !empty($_POST['nomDec']) && isset($_POST['prenomDec']) && !empty($_POST['prenomDec'])
            && isset($_POST['sexeDec']) && !empty($_POST['sexeDec']) && isset($_POST['dateNaisDec']) && !empty($_POST['dateNaisDec'])
            && isset($_POST['dateDec']) && !empty($_POST['dateDec']) && isset($_POST['lieuDec']) && !empty($_POST['lieuDec'])
            && isset($_POST['causeDec']) && !empty($_POST['causeDec']) && isset($_POST['nomParent']) && !empty($_POST['nomParent'])
            && isset($_POST['prenomParent']) && !empty($_POST['prenomParent']) && isset($_POST['lieuHabDec'])
            && !empty($_POST['lieuHabDec']) && isset($_POST['fonctDec']) && !empty($_POST['fonctDec'])

        ) {
            $nomDec = $_POST['nomDec'];
            $prenomDec = $_POST['prenomDec'];
            $sexe = $_POST['sexeDec'];
            $dateNais = $_POST['dateNaisDec'];
            $dateDec = $_POST['dateDec'];
            $lieuDec = $_POST['lieuDec'];
            $causeDec = $_POST['causeDec'];
            $nomParent = $_POST['nomParent'];
            $prenomParent = $_POST['prenomParent'];
            $lieuHabDec = $_POST['lieuHabDec'];
            $fonctDec = $_POST['fonctDec'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $DecesRepository = new DecesRepository;
        $DecesRepository->connection = new DatabaseConnection;
        $success = $DecesRepository->updateDeces($nomDec, $prenomDec, $sexe, $dateNais, $dateDec, $lieuDec, $causeDec, $nomParent, $prenomParent, $lieuHabDec, $fonctDec, $id);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter ce décès !');
        } else {
            header('Location: index.php?action=succes&destination=deces/deces');
        }
    }
}