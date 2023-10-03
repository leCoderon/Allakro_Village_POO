<?php
// Starting session
session_start();

// ***We include all controllers***
require_once('src/controllers/homepage.php');
require_once('src/controllers/login.php');
require_once('src/controllers/succes.php');
require_once('src/controllers/logout.php');
require_once('src/controllers/404.php');

//Maladie
require_once('src/controllers/maladie/maladie.php');
require_once('src/controllers/maladie/creer_maladie.php');
require_once('src/controllers/maladie/modifier_maladie.php');
require_once('src/controllers/maladie/suprimer_maladie.php');

// Demenage
require_once('src/controllers/demenage/demenage.php');
require_once('src/controllers/demenage/creer_demenage.php');
require_once('src/controllers/demenage/modifier_demenage.php');
require_once('src/controllers/demenage/suprimer_demenage.php');

// Amenage
require_once('src/controllers/amenage/amenage.php');
require_once('src/controllers/amenage/creer_amenage.php');
require_once('src/controllers/amenage/modifier_amenage.php');
require_once('src/controllers/amenage/suprimer_amenage.php');

// CentreSante
require_once('src/controllers/centre/centre.php');
require_once('src/controllers/centre/modifier_centre.php');
require_once('src/controllers/centre/creer_centre.php');
require_once('src/controllers/centre/suprimer_centre.php');

// Acteur
require_once('src/controllers/acteur/acteur.php');
require_once('src/controllers/acteur/creer_acteur.php');
require_once('src/controllers/acteur/modifier_acteur.php');
require_once('src/controllers/acteur/suprimer_acteur.php');

// Pharmacie
require_once('src/controllers/pharmacie/pharmacie.php');
require_once('src/controllers/pharmacie/creer_pharmacie.php');
require_once('src/controllers/pharmacie/modifier_pharmacie.php');
require_once('src/controllers/pharmacie/suprimer_pharmacie.php');

// Projet
require_once('src/controllers/projet/projet.php');
require_once('src/controllers/projet/creer_projet.php');
require_once('src/controllers/projet/modifier_projet.php');
require_once('src/controllers/projet/suprimer_projet.php');

// Actualite
require_once('src/controllers/actualite/actualite.php');
require_once('src/controllers/actualite/modifier_actualite.php');
require_once('src/controllers/actualite/creer_actualite.php');
require_once('src/controllers/actualite/suprimer_actu.php');

// Offre
require_once('src/controllers/offre/offre.php');
require_once('src/controllers/offre_attente/offre_attente.php');
require_once('src/controllers/offre_attente/confirme.php');
require_once('src/controllers/offre_attente/suprimer.php');
require_once('src/controllers/offre/suprimer_offre.php');
require_once('src/controllers/offre/modifier_offre.php');
require_once('src/controllers/offre/creer_offre.php');

// Deces
require_once('src/controllers/deces/deces.php');
require_once('src/controllers/deces_attente/deces_attente.php');
require_once('src/controllers/deces_attente/confirme.php');
require_once('src/controllers/deces_attente/suprimer_deces.php');
require_once('src/controllers/deces/suprimer_deces.php');
require_once('src/controllers/deces/modifier_deces.php');
require_once('src/controllers/deces/creer_deces.php');

// Naissance
require_once('src/controllers/naissance/naissance.php');
require_once('src/controllers/naissance_attente/naissance_attente.php');
require_once('src/controllers/naissance_attente/confirme.php');
require_once('src/controllers/naissance_attente/suprimer.php');
require_once('src/controllers/naissance/suprimer_naissance.php');
require_once('src/controllers/naissance/modifier_naissance.php');
require_once('src/controllers/naissance/creer_naissance.php');

// General
use Application\Controllers\Homepage\Homepage;
use Application\Controllers\Login\Login;
use Application\Controllers\Success\Success;
use Application\Controllers\Logout\Logout;
use Application\Controllers\Error\Error;


// Amenage
use Application\Controllers\Amenage\Amenage;
use Application\Controllers\Amenage\CreerAmenage;
use Application\Controllers\Amenage\ModifierAmenage;
use Application\Controllers\Amenage\SupprimerAmenage;

// CentreSante
use Application\Controllers\Centre\CreerCentre;
use Application\Controllers\Centre\ModifierCentre;
use Application\Controllers\Centre\SupprimerCentre;
use Application\Controllers\Centre\Centre;

// Acteur
use Application\Controllers\Acteur\Acteur;
use Application\Models\Acteur\CreerActeur;
use Application\Models\Acteur\ModifierActeur;
use Application\Models\Acteur\SupprimerActeur;

// Maladie
use Application\Controllers\Maladie\CreerMaladie;
use Application\Controllers\Maladie\Maladie;
use Application\Controllers\Maladie\ModifierMaladie;
use Application\Controllers\Maladie\SupprimerMaladie;

// Pharmacie
use Application\Controllers\Pharmacie\CreerPharmacie;
use Application\Controllers\Pharmacie\ModifierPharmacie;
use Application\Controllers\Pharmacie\Pharmacie;
use Application\Controllers\Pharmacie\SupprimerPharmacie;

//Demenage
use Application\Controllers\Demenage\CreerDemenage;
use Application\Controllers\Demenage\Demenage;
use Application\Controllers\Demenage\ModifierDemenage;
use Application\Controllers\Demenage\SupprimerDemenage;

// Projet
use Application\Controllers\Projet\Projet;
use Application\Controllers\Projet\CreerProjet;
use Application\Controllers\Projet\ModifierProjet;
use Application\Controllers\Projet\SuprimerProjet;

// Actualite
use Application\Controllers\Actualite\Actualite;
use Application\Controllers\Actualite\CreerActualite;
use Application\Controllers\Actualite\ModifierActualite;
use Application\Controllers\Actualite\SuprimerActualite;    

// Offre
use Application\Controllers\Offre\Offre;
use Application\Controllers\Offre\CreerOffre;
use Application\Controllers\Offre\ModifierOffre;
use Application\Controllers\Offre\SupprimerOffre;

// OffreAttente
use Application\Controllers\OffreAttente\SupprimerOffreAttente;
use Application\Controllers\OffreAttente\OffreAttente;
use Application\Controllers\OffreAttente\ConfirmerOffre;

// Deces
use Application\Controllers\Deces\SupprimerDeces;
use Application\Controllers\Deces\Deces; 
use Application\Controllers\Deces\CreerDeces;
use Application\Controllers\Deces\ModifierDeces;

// DecesAttente
use Application\Controllers\DecesAttente\DecesAttente;
use Application\Controllers\DecesAttente\SupprimerDecesAttente;
use Application\Controllers\DecesAttente\ConfirmerDeces;

// naissance
use Application\Controllers\Naissance\Naissance;
use Application\Controllers\Naissance\CreerNaissance;
use Application\Controllers\Naissance\SupprimerNaissance;
use Application\Controllers\Naissance\ModifierNaissance;

// naissanceAttente
use Application\Controllers\NaissanceAttente\NaissanceAttente;
use Application\Controllers\NaissanceAttente\ConfirmerNaissance;
use Application\Controllers\NaissanceAttente\SupprimerNaissanceAttente;

try {
    $page = isset($_GET['action']) ? $_GET['action'] : "homepage";
    switch ($page) {
        case 'homepage':
            (new Homepage())->execute();
            break;
            // Amenage
        case 'amenage/amenage':
            (new Amenage())->execute();
            break;
        case 'amenage/creer_amenage':
            (new CreerAmenage())->execute();
            break;
        case 'amenage/modifier_amenage':
            (new ModifierAmenage())->execute();
            break;
        case 'amenage/suprimer_amenage':
            (new SupprimerAmenage())->execute();
            break;
            //Demengae
        case 'demenage/demenage':
            (new Demenage())->execute();
            break;
        case 'demenage/creer_demenage':
            (new CreerDemenage())->execute();
            break;
        case 'demenage/modifier_demenage':
            (new ModifierDemenage())->execute();
            break;
        case 'demenage/suprimer_demenage':
            (new SupprimerDemenage())->execute();
            break;
        case 'login':
            (new Login())->execute();
            break;
        case 'logout':
            (new Logout())->execute();
            break;
            // Actualite
        case 'actualite/actualite':
            (new Actualite())->execute();
            break;
        case 'actualite/creer_actualite':
            (new CreerActualite())->execute();
            break;
        case 'actualite/suprimer_actu':
            (new SuprimerActualite())->execute();
            break;
        case 'actualite/modifier_actualite':
            (new ModifierActualite())->execute();
            break;
            // Projet
        case 'projet/projet':
            (new Projet())->execute();
            break;
        case 'projet/modifier_projet':
            (new ModifierProjet())->execute();
            break;
        case 'projet/suprimer_projet':
            (new SuprimerProjet())->execute();
            break;
        case 'projet/creer_projet':
            (new CreerProjet())->execute();
            break;
            //Naissance
        case 'naissance/naissance':
            (new Naissance())->execute();
            break;
        case 'naissance/modifier_naissance':
            (new ModifierNaissance())->execute();
            break;
        case 'naissance/creer_naissance':
            (new CreerNaissance())->execute();
            break;
        case 'naissance_attente/suprimer':
            (new SupprimerNaissanceAttente())->execute();
            break;
        case 'naissance/suprimer_naissance':
            (new SupprimerNaissance())->execute();
            break;
        case 'naissance_attente/naissance_attente':
            (new NaissanceAttente())->execute();
            break;
        case 'naissance_attente/confirme':
            (new ConfirmerNaissance())->execute();
            break;
            // Deces
        case 'deces/deces':
            (new Deces())->execute();
            break;
        case 'deces/modifier_deces':
            (new ModifierDeces())->execute();
            break;
        case 'deces/creer_deces':
            (new CreerDeces())->execute();
            break;
        case 'deces/suprimer_deces':
            (new SupprimerDeces())->execute();
            break;
        case 'deces_attente/confirme':
            (new ConfirmerDeces())->execute();
            break;
        case 'deces_attente/deces_attente':
            (new DecesAttente())->execute();
            break;
        case 'deces_attente/suprimer_deces':
            (new SupprimerDecesAttente())->execute();
            break;
            //Offre
        case 'offre/offre':
            (new Offre())->execute();
            break;
        case 'offre/modifier_offre':
            (new ModifierOffre())->execute();
            break;
        case 'offre/creer_offre':
            (new CreerOffre())->execute();
            break;
        case 'offre_attente/confirme':
            (new ConfirmerOffre())->execute();
            break;
        case 'offre/suprimer_offre':
            (new SupprimerOffre())->execute();
            break;
        case 'offre_attente/offre_attente':
            (new OffreAttente())->execute();
            break;
        case 'offre_attente/suprimer':
            (new SupprimerOffreAttente())->execute();
            break;
            // Pharmacie
        case 'pharmacie/pharmacie':
            (new Pharmacie())->execute();
            break;
        case 'pharmacie/creer_pharmacie':
            (new CreerPharmacie())->execute();
            break;
        case 'pharmacie/modifier_pharmacie':
            (new ModifierPharmacie())->execute();
            break;
        case 'pharmacie/suprimer_pharmacie':
            (new SupprimerPharmacie())->execute();
            break;
            // CentreSante
        case 'centre/centre':
            (new Centre())->execute();
            break;
        case 'centre/creer_centre':
            (new CreerCentre())->execute();
            break;
        case 'centre/modifier_centre':
            (new ModifierCentre())->execute();
            break;
        case 'centre/suprimer_centre':
            (new SupprimerCentre())->execute();
            break;
            // Maladie
        case 'maladie/maladie':
            (new Maladie())->execute();
            break;
        case 'maladie/creer_maladie':
            (new CreerMaladie())->execute();
            break;
        case 'maladie/modifier_maladie':
            (new ModifierMaladie())->execute();
            break;
        case 'maladie/suprimer_maladie':
            (new SupprimerMaladie())->execute();
            break;
            // Acteur
        case 'acteur/acteur':
            (new Acteur())->execute(); 
            break;
        case 'acteur/creer_acteur':
            (new CreerActeur())->execute(); 
            break;
        case 'acteur/modifier_acteur':
            (new ModifierActeur())->execute(); 
            break;
        case 'acteur/suprimer_acteur':
            (new SupprimerActeur())->execute(); 
            break;
        case 'succes':
            (new Success())->execute(); 
            break;
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    // require('templates/404.php');
    (new Error())->execute($errorMessage);
}