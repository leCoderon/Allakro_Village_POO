

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - acteur</title>
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
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../assets/img/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="post" action="../index.php?action=signup">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" id="nom"
                                            placeholder="Titre de l'actualité"  >
                                        <label for="nom">nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="prenom" id="Prénom"
                                            placeholder="Titre de l'actualité"  >
                                        <label for="Prénom">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="civilite" id="Catégorie"
                                            placeholder="Civilité"  >
                                        <label for="Catégorie">Civilité</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date" id="date" placeholder="Date de naissance"
                                             >
                                        <label for="date">Date de naissance</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="Email"
                                            placeholder="Email"  >
                                        <label for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="enfant" id="Sexe"
                                            placeholder="Nombre d'enfant"  >
                                        <label for="Sexe">Nombre d'enfant</label>
                                        <span class="text-muted">saisir aucun si zéro Sexe</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="sexe" id="Sexe" placeholder="Sexe"
                                             >
                                        <label for="Sexe">Sexe (M/F)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="numero" id="Numéro"
                                            placeholder="Numéro"  >
                                        <label for="Numéro">Numéro</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fonction" id="fonction"
                                            placeholder="fonction"  >
                                        <label for="fonction">Fonction</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="password" id="password"
                                            placeholder="mot de passe"  >
                                        <label for="password">Entrez un mot de passe</label>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5"
                                       name="inscrire" type="submit">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>