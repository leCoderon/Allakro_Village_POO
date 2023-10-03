<?php $title = "Admin - Décès Attente"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des décès</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- Tables -->
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-md-12 col-lg-12 offset-lg- py-4">
            <?php if (sizeof($deces_attentes) > 0): ?>

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
                        <?php foreach ($deces_attentes as $deces_attente): ?>
                            <tr class="text-start">
                                <td>
                                    <?= $deces_attente->idDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->nomDec; ?>
                                    <?= $deces_attente->prenDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->sexDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->dateNaisDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->dateDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->causeDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->lieuHabDec; ?>
                                </td>
                                <td>
                                    <?= $deces_attente->fonctDec; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#edit<?= $deces_attente->idDec ?>" data-bs-toggle="modal">Confirmé <i
                                                class="bi bi-check"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#delete<?= $deces_attente->idDec ?>" data-bs-toggle="modal">Supprimer <i
                                                class="bi bi-trash"></i></a>
                                    </button>
                                    <?php include("templates/deces_attente/button.php"); ?>
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