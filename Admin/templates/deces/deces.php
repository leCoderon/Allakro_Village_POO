<?php $title = "Admin - Décès"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des décès</h1>

    </div>
</div>
<!-- Page Header End -->

<!-- Ajouter article -->
<button type="button" class="btn btn-primary btn-lg ms-lg-2 ms-2 animated slideInLeft" data-bs-toggle="modal"
    data-bs-target="#createArticle">
    Ajouter un nouveau décès <i class="bi bi-plus"></i>
</button>

<div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Ajouter un nouveau décès</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="col-md-12 col-lg-12 py-4">

                    <form method="post" action="index.php?action=deces/creer_deces">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomDec" id="nom"
                                        placeholder="Nom du défunt" required>
                                    <label for="nom">Nom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomDec" id="prenom"
                                        placeholder="prénom du défunt" required>
                                    <label for="prenom">prénom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sexe" name="sexeDec"
                                        placeholder="sexe du défunt (Fille/Garçon)" required>
                                    <label for="sexe">sexe(Fille/Garçon)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateNaisDec" id="date"
                                        placeholder="Date de naissance du défunt" required>
                                    <label for="date">Date de naissance</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateDec" id="date"
                                        placeholder="date de décès du défunt" required>
                                    <label for="date">date de décès</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="causeDec" id="cause"
                                        placeholder="lieu de décès du défunt" required>
                                    <label for="cause">cause de décès</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuDec" id="lieu"
                                        placeholder="lieu de décès du défunt" required>
                                    <label for="lieu">lieu du décès</label>
                                    <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le
                                        domicile</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomParent" nomMere id="nomp"
                                        placeholder="Nom parent du défunt" required>
                                    <label for="nomp">Nom du parent du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomParent" id="prenomp"
                                        placeholder="prénom du parent du défunt" required>
                                    <label for="prenomp">Prénom du parent du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuHabDec" id="lieu"
                                        placeholder="Lieu de résidence du défunt" required>
                                    <label for="lieu">Domicile</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fonctDec" id="fonct"
                                        placeholder="Fonctiosexen du défunt" required>
                                    <label for="fonct">Fonction du défunt</label>
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
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-2">Nom et prénom du défunt</th>
                        <th class="col-1">Sexe</th>
                        <th class="col-2">Date de naissance</th>
                        <th class="col-2">Date de décès</th>
                        <th class="col-2">Cause du décès</th>
                        <th class="col-2">Domicile</th>
                        <th class="col-2">Fonction</th>
                        <th class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($deces as $dece): ?>
                        <tr class="text-start">
                            <td>
                                <?= $dece->idDec; ?>
                            </td>
                            <td>
                                <?= $dece->nomDec; ?>
                                <?= $dece->prenDec; ?>
                            </td>
                            <td>
                                <?= $dece->sexDec; ?>
                            </td>
                            <td>
                                <?= $dece->dateNaisDec; ?>
                            </td>
                            <td>
                                <?= $dece->dateDec; ?>
                            </td>
                            <td>
                                <?= $dece->causeDec; ?>
                            </td>
                            <td>
                                <?= $dece->lieuHabDec; ?>
                            </td>
                            <td>
                                <?= $dece->fonctDec; ?>
                            </td>
                            <td>
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#edit<?= $dece->idDec ?>" data-bs-toggle="modal">Editer <i
                                            class="bi bi-pencil"></i></a>
                                </button>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    <a href="#delete<?= $dece->idDec ?>" data-bs-toggle="modal">Supprimer <i
                                            class="bi bi-trash"></i></a>
                                </button>
                                <?php include("templates/deces/button.php"); ?>
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