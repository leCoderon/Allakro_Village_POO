<?php
namespace Application\Controllers\NaissanceAttente;

require_once('src/models/naissance_attente.php');

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Models\NaissanceAttente\NaissanceAttentesRepository;

class ConfirmerNaissance
{
    public function execute()
    {
        $nomEnf = null;
        $prenomEnf = null;
        $sexe = null;
        $dateNais = null;
        $modeNais = null;
        $nomPere = null;
        $prenomPere = null;
        $nomMere = null;
        $prenomMere = null;
        $lieuHab = null;

        $id = $_GET['id'];

        if (
            isset($_POST['nomEnf']) && !empty($_POST['nomEnf']) && isset($_POST['prenomEnf']) && !empty($_POST['prenomEnf'])
            && isset($_POST['sexeEnf']) && !empty($_POST['sexeEnf']) && isset($_POST['dateNais']) && !empty($_POST['dateNais'])
            && isset($_POST['modeNais']) && !empty($_POST['modeNais']) && isset($_POST['nomPere']) && !empty($_POST['nomPere'])
            && isset($_POST['prenomPere']) && !empty($_POST['prenomPere']) && isset($_POST['nomMere']) && !empty($_POST['nomMere'])
            && isset($_POST['prenomMere']) && !empty($_POST['prenomMere'])
            && isset($_POST['lieuHab']) && !empty($_POST['lieuHab'])
        ) {
            $nomEnf = $_POST['nomEnf'];
            $prenomEnf = $_POST['prenomEnf'];
            $sexe = $_POST['sexeEnf'];
            $dateNais = $_POST['dateNais'];
            $modeNais = $_POST['modeNais'];
            $nomPere = $_POST['nomPere'];
            $prenomPere = $_POST['prenomPere'];
            $nomMere = $_POST['nomMere'];
            $prenomMere = $_POST['prenomMere'];
            $lieuHab = $_POST['lieuHab'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        // Naissances
        $NaissanceAttentesRepository = new NaissanceAttentesRepository;
        $NaissanceAttentesRepository->connection = new DatabaseConnection;
        $success = $NaissanceAttentesRepository->createNaissance($nomEnf, $prenomEnf, $sexe, $dateNais, $modeNais, $nomPere, $prenomPere, $nomMere, $prenomMere, $lieuHab);

        if (!$success) {
            throw new \Exception('Impossible de confirmé !');
        } else {
            header('Location: index.php?action=succes&destination=naissance_attente/naissance_attente');
        }
    }
}