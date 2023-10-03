<?php $title = "Admin - Actualites"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion de l'actualité</h1>

    </div>
</div>
<!-- Page Header End -->

<!-- Ajouter article -->
<button type="button" class="btn btn-primary btn-lg ms-lg-2 ms-2 animated slideInLeft" data-bs-toggle="modal"
    data-bs-target="#createArticle">
    Ajouter une nouvelle actualité <i class="bi bi-plus"></i>
</button>

<div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle actualité</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 py-4">

                        <form method="post" action="index.php?action=actualite/creer_actualite">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="titre" id="titre"
                                            placeholder="Titre de l'actualité" required>
                                        <label for="titre">Titre de l'actualité</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="categorie" id="Catégorie"
                                            placeholder="Catégorie" required>
                                        <label for="Catégorie">Catégorie</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date" id="date" placeholder="date"
                                            required>
                                        <label for="date">Date</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Descrption"
                                            id="Descrption" style="height: 100px" required></textarea>
                                        <label for="message">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="image" id="image"
                                            placeholder="Entrer l'url de l'image">
                                        <label for="image">Entrer l'url de l'image</label>
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
                        <th class="col-2">Titre</th>
                        <th class="col-4">Description</th>
                        <th class="col-1">Image</th>
                        <th class="col-1">Catégorie</th>
                        <th class="col-1">Date</th>
                        <th class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($actualites as $actualite): ?>
                        <tr class="text-start">
                            <td>
                                <?= $actualite->idActu; ?>
                            </td>
                            <td>
                                <?= $actualite->titreActu; ?>
                            </td>
                            <td>
                                <?= substr($actualite->descActu, 0, 80) ?> [...]
                            </td>
                            <td><img class="w-50" src="<?= $actualite->photoActu; ?>" alt=""></td>
                            <td>
                                <?= $actualite->categorieActu; ?>
                            </td>
                            <td>
                                <?= $actualite->dateActu; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#edit<?= $actualite->idActu ?>" data-bs-toggle="modal">Editer <i
                                            class="bi bi-pencil"></i></a>
                                </button>

                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a
                                    href="#delete<?= $actualite->idActu ?>"  data-bs-toggle="modal">Supprimer <i class="bi bi-trash"></i></a>
                                    
                                </button>
                                <?php include("templates/actualite/button.php"); ?>
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