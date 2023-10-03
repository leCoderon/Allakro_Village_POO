<?php $title = "Admin - Offres_attente"; ?>

<?php ob_start(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-3">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gestion des offres</h1>

    </div>
</div>
<!-- Page Header End -->


<div class="container-fluid py-5">
    <div class="row">
        <!-- Table -->
        <div class="col-md-12 col-lg-12 offset-lg- py-4">
            <?php if (sizeof($offre_attentes) > 0): ?>

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
                        <?php foreach ($offre_attentes as $offre_attente): ?>
                            <tr class="text-start">
                                <td>
                                    <?= $offre_attente->idOff; ?>
                                </td>
                                <td>
                                    <?= $offre_attente->servOff; ?>
                                </td>
                                <td>
                                    <?= substr($offre_attente->descOff, 0, 50) ?> [...]
                                </td>
                                <td>
                                    <?= $offre_attente->qualifOff; ?>
                                </td>
                                <td>
                                    <?= $offre_attente->telOff; ?>
                                </td>
                                <td>
                                    <?= $offre_attente->dateOff; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#edit<?= $offre_attente->idOff ?>" data-bs-toggle="modal">Confirmer <i
                                                class="bi bi-check"></i></a>
                                    </button>

                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        <a href="#delete<?= $offre_attente->idOff ?>" data-bs-toggle="modal">Supprimer <i
                                                class="bi bi-trash"></i></a>

                                    </button>
                                    <?php include("templates/offre_attente/button.php"); ?>
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