<?php $title = "Allakro - Projets"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=projet">Projets</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Projet</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h1 class="display-5 mb-3 animated slideInDown">
                <?= $projet->nomProj; ?>
            </h1>
            <p><i class="fa fa-clock"></i> <?= $projet->date; ?>-<?= $projet->auteur; ?></p>
            <p><img class="img-fluid w-100" src="<?= $projet->photoProj; ?>" alt=""></p>

            <p class="fs-5">
                <?=    nl2br($projet->descProj);

                ; ?>
            </p>
        </div>
        <div class="col-lg-3 col-md-12 offset-lg-1">
            
            <h5 class="text-primary">Partagez ce contenu</h5>
            <div class="d-flex pt-2">
                <a class="btn btn-square btn-outline-dark btn-social me-1" href=""><i class="fab fa-twitter  "></i></a>
                <a class="btn btn-square btn-outline-dark btn-social me-1" href=""><i
                        class="fab fa-facebook-f "></i></a>
                <a class="btn btn-square btn-outline-dark btn-social me-1"
                    href="https://youtu.be/8WgSBlevdXQ?si=4T5WbQ6cF604h0SN"><i class="fab fa-youtube "></i></a>
                <a class="btn btn-square btn-outline-dark btn-social" href=""><i class="fab fa-linkedin-in  "></i></a>
            </div>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>