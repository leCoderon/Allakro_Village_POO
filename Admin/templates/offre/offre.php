<?php $title = "Admin - Offres"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des offres</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- Ajouter article -->
<button type="button" class="btn btn-primary btn-lg ms-lg-2 ms-2 animated slideInLeft" data-bs-toggle="modal"
    data-bs-target="#createArticle">
    Ajouter une nouvelle offre <i class="bi bi-plus"></i>
</button>

<div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle offre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 py-4">

                    <form method="post" action="index.php?action=offre/creer_offre">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom">
                                    <label for="nom">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="votre prenom">
                                    <label for="prenom">Votre prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="votre email">
                                    <label for="email">votre E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="numero" id="numero" placeholder="votre numero">
                                    <label for="numero">Numéro de téléphone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="service" id="service" placeholder="service offert">
                                    <label for="service">Service offert</label>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="competence" id="competence" placeholder="competence">
                                    <label for="competence">Competences</label>
                                </div>
                            </div>

                            <div class="col-7">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="decrivez votre offre" name="description" id="description"
                                        style="height: 100px"></textarea>
                                    <label for="description">Description de l'offre</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="">
                                    <label for="description">Importez une photo (facultatif)</label>
                                    <input type="file" name="photo">
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




<div class="container-fluid py-5">
    <div class="row">
        <!-- Table -->
        <div class="col-md-12 col-lg-12 offset-lg- py-4">

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-primary text-white animated slideInUp">
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-2">Service offert</th>
                        <th class="col-4">Description</th>
                        <th class="col-1">Competence</th>
                        <th class="col-1">Contact</th>
                        <th class="col-1">Date</th>
                        <th class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($offres as $offre): ?>
                        <tr class="text-start">
                            <td>
                                <?= $offre->idOff; ?>
                            </td>
                            <td>
                                <?= $offre->servOff; ?>
                            </td>
                            <td>
                                <?= substr($offre->descOff, 0, 50) ?> [...]
                            </td>
                            <td><?= $offre->qualifOff; ?></td>
                            <td>
                                <?= $offre->telOff; ?>
                            </td>
                            <td>
                                <?= $offre->dateOff; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#edit<?= $offre->idOff ?>" data-bs-toggle="modal">Editer <i
                                            class="bi bi-pencil"></i></a>
                                </button>

                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a
                                    href="#delete<?= $offre->idOff ?>"  data-bs-toggle="modal">Supprimer <i class="bi bi-trash"></i></a>
                                    
                                </button>
                                <?php include("templates/offre/button.php"); ?>
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