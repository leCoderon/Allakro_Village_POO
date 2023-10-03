<?php
session_start();

include('../src/models/acteur.php');
include('../src/lib/bdConnection.php');

use Application\Models\Acteur\acteurRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

$acteurRepository = new acteurRepository;
$acteurRepository->connection = new DatabaseConnection;

if (isset($_POST['connecter'])) {
    if (
        isset($_POST['email']) && !empty($_POST['email'])
        && !empty($_POST['password']) && isset($_POST['password'])
    ) {

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // vérifie que l'email existe
        $acteur = $acteurRepository->getActeur($email);

        if ($acteur) {
            $hashed_password = $acteur['mot_pass_act'];

            if (password_verify($password, $hashed_password)) {

                $_SESSION['acteur'] = $acteur;
                header('location: ../index.php');
            } else {
                $error = "";
            }
        } else {
            $error = "";
        }

    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>

</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <h2 class="text-center display-6">Veuillez vous identifier s'il vous plaît</h5>
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="../assets/img/draw2.svg" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form method="post">
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16"
                                        role="img" aria-label="Warning:">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <div>
                                        Vos informations sont incorrectes
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" placeholder="moi@exemple.com"
                                    class="form-control form-control-lg" required />
                                <label class="form-label" for="email">Adresse Email </label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" placeholder="Entrez votre mot de passe"
                                    name="password" class="form-control form-control-lg" required />
                                <label class="form-label" for="password">Mot de passe</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="connecter"
                                class="btn btn-primary btn-lg btn-block mb-4 w-100">Se
                                connecter</button>

                            <p>Vous n'êtes pas membre? <a href="signup.php">Inscrivez-vous</a></p>




                        </form>
                    </div>
            </div>
        </div>
    </section>

</body>

</html>