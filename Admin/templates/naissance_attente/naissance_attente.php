<?php $title = "Admin - Naissance_attente"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des naissances</h1>

    </div>
</div>
<!-- Page Header End -->



<!-- Tables -->
<div class="container-fluid py-5">
    <div class="row">

        <div class="col-md-12 col-lg-12 offset-lg- py-4">
            <?php if (sizeof($naissance_attentes) > 0): ?>

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
                        <?php foreach ($naissance_attentes as $naissance_attente): ?>
                            <tr class="text-start">
                                <td>
                                    <?= $naissance_attente->idNais; ?>
                                </td>
                                <td>
                                    <?= $naissance_attente->nomEnf; ?>
                                    <?= $naissance_attente->prenEnf; ?>
                                </td>
                                <td>
                                    <?= $naissance_attente->sexEnf; ?>
                                </td>
                                <td>
                                    <?= $naissance_attente->dateNaisEnf; ?>
                                </td>
                                <td>
                                    <?= $naissance_attente->modeNaisEnf; ?>
                                </td>
                                <td>
                                    <?= $naissance_attente->lieuHabEnf; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#edit<?= $naissance_attente->idNais ?>" data-bs-toggle="modal">Confirmer<i
                                                class="bi bi-check"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#delete<?= $naissance_attente->idNais ?>" data-bs-toggle="modal">Supprimer <i
                                                class="bi bi-trash"></i></a>

                                    </button>
                                    <?php include("templates/naissance_attente/button.php"); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            <?php else: ?>

                <div class="alert alert-danger d-flex align-items-center mt-3">
                    <p>Aucun élément en attente pour l'instant</p>
                    <!-- <button class="btn-close ms-auto"></button> -->
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>