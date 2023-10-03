<?php
include('./src/models/admin.php');
use Application\Models\Admin\AdminRepository;
use Application\Lib\DatabaseConnection\DatabaseConnection;

$AdminRepository = new AdminRepository;
$AdminRepository->connection = new DatabaseConnection;
// $deces_attentes = $AdminRepository->getDecesAttente();

if (isset($_POST['envoyer'])) {
    if (
        isset($_POST['email']) && !empty($_POST['email'])
        && !empty($_POST['password']) && isset($_POST['password'])
    ) {

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $admin = $AdminRepository->getAdmin($email, $password);
        if ($admin) {
            $_SESSION['admin'] = $admin;
            header('location: index.php');
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
    <title>Connexion - admin</title>
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
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" placeholder="E-mail"
                                    class="form-control form-control-lg" required />
                                <label class="form-label" for="email">Adresse Email </label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" placeholder="Mot de passe" required />
                                <label class="form-label" for="password">Mot de passe</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="envoyer" class="btn btn-primary btn-lg btn-block">Se
                                connecter</button>

                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger d-flex  mt-3 w-75">
                                    <p>erreur de code</p>
                                    <button class="btn-close ms-auto"></button>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
            </div>
        </div>
    </section>

</body>

</html>