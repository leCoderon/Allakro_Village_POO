<?php $title = "Admin - Aménager"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des acteurs qui déménagent</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- Ajouter article -->
<button type="button" class="btn btn-primary btn-lg ms-lg-2 ms-2 animated slideInLeft" data-bs-toggle="modal"
    data-bs-target="#createArticle">
    Ajouter un nouvel article <i class="bi bi-plus"></i>
</button>

<div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouvel article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 py-4">

                        <form method="post" action="index.php?action=demenage/creer_demenage">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" id="nom"
                                            placeholder="nom" required>
                                        <label for="nom">nom</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="prenom" id="prenom"
                                            placeholder="prenom" required>
                                        <label for="prenom">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="destination" id="Destination"
                                            placeholder="Destination" required>
                                        <label for="Destination">Destination</label>
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
                                        <input type="text" class="form-control" name="sexe" id="Sexe" placeholder="Sexe"
                                            required>
                                        <label for="Sexe">Sexe (M/F)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="domicile" id="domicile"
                                            placeholder="domicile" required>
                                        <label for="domicile">Domicile</label>
                                        <span class="text-muted">Par exemple, j'habite à côté de chez COULIBALY</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fonction" id="Fonction"
                                            placeholder="Fonction" required>
                                        <label for="Fonction">Fonction</label>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5"
                                        type="submit">Soumettre</button>
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
                        <th class="col-3">Nom & Prénom</th>
                        <th class="col-2">Date de naissance</th>
                        <th class="col-2">Destination</th>
                        <th class="col-2">Fonction</th>
                        <th class="col-1">sexe</th>
                        <th class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($demenages as $demenage): ?>
                        <tr class="text-start">
                            <td>
                                <?= $demenage->id; ?>
                            </td>
                            <td>
                                <?= $demenage->nom; ?>
                                <?= $demenage->prenom; ?>
                            </td>
                            <td>
                                <?= $demenage->dateNais ?>
                            </td>
                            <td>
                                <?= $demenage->destination; ?>
                            </td>
                            <td>
                                <?= $demenage->fonct; ?>
                            </td>
                            <td>
                                <?= $demenage->sexe; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#edit<?= $demenage->id ?>" data-bs-toggle="modal">Editer <i
                                            class="bi bi-pencil"></i></a>
                                </button>

                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#delete<?= $demenage->id ?>" data-bs-toggle="modal">Supprimer <i
                                            class="bi bi-trash"></i></a>

                                </button>
                                <?php include("templates/demenage/button.php"); ?>
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