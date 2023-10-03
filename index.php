<?php
session_start();

// including controllers
require_once('src/controllers/homepage.php');
require_once('src/controllers/news.php');
require_once('src/controllers/about.php');
require_once('src/controllers/offre.php');
require_once('src/controllers/projet.php');
require_once('src/controllers/404.php');
require_once('src/controllers/signup.php');
require_once('src/controllers/succes.php');
require_once('src/controllers/amenage.php');
require_once('src/controllers/demenage.php');
require_once('src/controllers/deces.php');
require_once('src/controllers/logout.php');

require_once('src/controllers/poster_offre.php');
require_once('src/controllers/declarer_naissance.php');
require_once('src/controllers/declarer_deces.php');

require_once('src/controllers/centre_sante.php');
require_once('src/controllers/pharmacie.php');
require_once('src/controllers/maladie.php');
require_once('src/controllers/naissance.php');

require_once('src/controllers/projet_view.php');
require_once('src/controllers/actualite_view.php');
require_once('src/controllers/naissance_view.php');
require_once('src/controllers/deces_view.php');
require_once('src/controllers/maladie_view.php');
require_once('src/controllers/offre_view.php');

// using namespace
// Main pages
use Application\Controllers\News\News;
use Application\Controllers\About\About;
use Application\Controllers\Offre\Offre;
use Application\Controllers\Deces\Deces;
use Application\Controllers\Projet\Projet;
use Application\Controllers\Maladie\Maladie;
use Application\Controllers\Homepage\Homepage;
use Application\Controllers\Pharmacie\Pharmacie;
use Application\Controllers\Naissance\Naissance;
use Application\Controllers\CentreSante\CentreSante;

// Authentification
use Application\Controllers\Logout\Logout;
use Application\Controllers\Signup\Signup;
use Application\Controllers\Error\Error;
use Application\Controllers\Success\Success;
use Application\Controllers\Amenage\Amenage;
use Application\Controllers\Demenage\Demenage;

//posting items
use Application\Controllers\PosterOffre\PosterOffre;
use Application\Controllers\DeclarerDeces\DeclarerDeces;
use Application\Controllers\DeclarerNaissance\DeclarerNaissance;

// page content viewer
use Application\Controllers\DecesView\DecesView;
use Application\Controllers\OffreView\OffreView;
use Application\Controllers\ProjetView\ProjetView;
use Application\Controllers\MaladieView\MaladieView;
use Application\Controllers\NaissanceView\NaissanceView;
use Application\Controllers\ActualiteView\ActualiteView;


try {
  $page = isset($_GET['action']) ? $_GET['action'] : "Homepage";

// we call the right class accrording to the $page value
  switch ($page) {
    case 'about':
      (new About())->execute();
      break;
    case 'news':
      (new News())->execute();
      break;
    case 'offre':
      (new Offre())->execute();
      break;
    case 'projet':
      (new Projet())->execute();
      break;
    case 'pharmacie':
      (new Pharmacie())->execute();
      break;
    case 'centre_sante':
      (new CentreSante())->execute();
      break;
    case 'maladie':
      (new Maladie())->execute();
      break;
    case 'naissance':
      (new Naissance())->execute();
      break;
    case 'deces':
      (new Deces())->execute();
      break;
    case 'deces_view':
      (new DecesView())->execute();
      break;
    case 'naissance_view':
      (new NaissanceView())->execute();
      break;
    case 'maladie_view':
      (new MaladieView())->execute();
      break;
    case 'projet_view':
      (new ProjetView())->execute();
      break;
    case 'actualite_view':
      (new ActualiteView())->execute();
      break;
    case 'offre_view':
      (new OffreView())->execute();
      break;
    case 'logout':
      (new Logout())->execute();
      break;
    case 'signup':
      (new Signup())->execute();
      break;
    case 'amenage':
      (new Amenage())->execute();
      break;
    case 'demenage':
      (new Demenage())->execute();
      break;
    case 'poster_offre':
      (new PosterOffre())->execute();
      break;
    case 'declarer_naissance':
      (new DeclarerNaissance())->execute();
      break;
    case 'declarer_deces':
      (new DeclarerDeces())->execute();
      break;
    case 'succes':
      (new Success())->execute();
      break;
    default:
      (new Homepage())->execute();
  }

} catch (Exception $e) {
  $errorMessage = $e->getMessage();

  (new Error())->execute($errorMessage);
}