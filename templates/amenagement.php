<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - amenagement</title>
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
                    <img src="../assets/img/demenage.jpeg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="post" action="../index.php?action=amenage">
                        <h5 class="mb-3 text-center text-primary">Si vous venez d'aménager, veuillez s'il vous plait
                            renseigner ce formulaire</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="titre"
                                        placeholder="Titre de l'actualité" required>
                                    <label for="titre">nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenom" id="titre"
                                        placeholder="Titre de l'actualité" required>
                                    <label for="titre">Prénom</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="provenance" id="Catégorie"
                                        placeholder="Catégorie" required>
                                    <label for="Catégorie">Provenance</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="date" id="date" placeholder="date"
                                        required>
                                    <label for="date">Date de naissance</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="sexe" id="date" placeholder="date"
                                        required>
                                    <label for="date">Sexe (M/F)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="mode" id="date" placeholder="mode"
                                        required>
                                    <label for="date">Mode d'hebergement</label>
                                    <span class="text-muted">(nouvelle habitation/chez un parent)
                                        Si chez un parent, indiquer le nom du parent
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="domicile" id="date" placeholder="date"
                                        required>
                                    <label for="date">Domicile</label>
                                    <span class="text-muted">Par exemple, j'habite à côté de chez COULIBALY</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fonction" id="date" placeholder="date"
                                        required>
                                    <label for="date">Fonction</label>
                                </div>
                            </div>



                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Soumettre</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>