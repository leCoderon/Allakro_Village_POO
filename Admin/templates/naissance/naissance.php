<?php $title = "Admin - Naissance"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des naissances</h1>

    </div>
</div>
<!-- Page Header End -->

<!-- Ajouter article -->
<button type="button" class="btn btn-primary btn-lg ms-lg-2 ms-2 animated slideInLeft" data-bs-toggle="modal"
    data-bs-target="#createArticle">
    Ajouter une nouvelle naissance <i class="bi bi-plus"></i>
</button>

<div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle naissance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="col-md-12 col-lg-12 py-4">

                    <form method="post" action="index.php?action=naissance/creer_naissance">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomEnf" id="nom"
                                        placeholder="Nom de l'enfant" required>
                                    <label for="nom">Nom de l'enfant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomEnf" id="prenom"
                                        placeholder="prénom de l'enfant" required>
                                    <label for="prenom">prénom de l'enfant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" name="sexeEnf"
                                        placeholder="sexe de l'enfant (Fille/Garçon)" required>
                                    <label for="email">sexe(Fille/Garçon)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateNais" id="date"
                                        placeholder="Date de naissance de l'enfant" required>
                                    <label for="date">Date de naissance</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="modeNais" id="mode"
                                        placeholder="Mode de naissance de l'enfant" required>
                                    <label for="mode">Mode de naissance</label>
                                    <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le
                                        quartier</span>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomPere" id="nompere"
                                        placeholder="Nom du pèreprénom du père" required>
                                    <label for="nompere">Nom du père</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomPere" nomMere id="prenomPere"
                                        placeholder="prénom du père" required>
                                    <label for="prenomPere">prénom du père</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomMere" id="nomMere"
                                        placeholder="Nom du pèreprénom de la mère" required>
                                    <label for="nomMere">Nom de la mère</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomMere" id="prenomMere"
                                        placeholder="prénom de la mère" required>
                                    <label for="prenomMere">prénom de la mère</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuHab" id="lieuHab"
                                        placeholder="Lieu d'habitation de l'enfant" required>
                                    <label for="lieuHab">Domicile</label>
                                    <span class="text-muted">NB: à défaut lieu d’habitation de la mère</span>
                                </div>
                            </div>



                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                    Soumettre
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- FORM END -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Ajouter article end-->

<!-- Tables -->
<div class="container-fluid py-5">
    <div class="row">

        <div class="col-md-12 col-lg-12 offset-lg- py-4">

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-primary text-white animated slideInUp">
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-2">Nom et prénom du bébé</th>
                        <th class="col-1">Sexe</th>
                        <th class="col-2">Date de naissance</th>
                        <th class="col-2">Mode de naissance</th>
                        <th class="col-2">Domicile</th>
                        <th class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($naissances as $naissance): ?>
                        <tr class="text-start">
                            <td>
                                <?= $naissance->idNais; ?>
                            </td>
                            <td>
                                <?= $naissance->nomEnf; ?>
                                <?= $naissance->prenEnf; ?>
                            </td>
                            <td>
                                <?= $naissance->sexEnf; ?>
                            </td>
                            <td>
                                <?= $naissance->dateNaisEnf; ?>
                            </td>
                            <td>
                                <?= $naissance->modeNaisEnf; ?>
                            </td>
                            <td>
                                <?= $naissance->lieuHabEnf; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#edit<?= $naissance->idNais ?>" data-bs-toggle="modal">Editer <i
                                            class="bi bi-pencil"></i></a>
                                </button>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#delete<?= $naissance->idNais ?>" data-bs-toggle="modal">Supprimer <i
                                            class="bi bi-trash"></i></a>

                                </button>
                                <?php include("templates/naissance/button.php"); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>