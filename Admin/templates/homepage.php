<?php $title = "Admin - Acceuil"; ?>


<?php ob_start(); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Admin dashboard</h1>

    </div>
</div>
<!-- Page Header End -->


<div class="container-fluid my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row">
        <!-- Naissances start -->
        <div class="col-md-12 col-lg-12 my-5">
            <h1 class="fs-3 text-center text-primary"><i class="fa fa-clock"></i> Naissances en attentes de confirmation
                <i class="fa fa-clock"></i>
            </h1>

            <?php if (sizeof($naissance_attentes) >     0): ?>
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
                                        <a href="#delete<?= $naissance_attente->idNais ?>" data-bs-toggle="modal">Supprimer
                                            <i class="bi bi-trash"></i></a>

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
        <!-- Naissances end -->

        <!-- Offres start -->
        <div class="col-md-12 col-lg-12 my-5">
            <h1 class="fs-3 text-center text-primary"><i class="fa fa-clock"></i> Offres en attentes de confirmation <i
                    class="fa fa-clock"></i></h1>
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
        <!-- Offres end -->

        <!-- Décès end -->
        <div class="col-md-12 col-lg-12 offset-lg- py-4">
            <h1 class="fs-3 text-center text-primary"><i class="fa fa-clock"></i> Décès en attentes de confirmation <i
                    class="fa fa-clock"></i></h1>
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
        <!-- Décès end -->

    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>