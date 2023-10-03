<?php $title = "Allakro - actualite"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=news">Actualites</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Actualite</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h1>
                <?= $actualite->titreActu; ?>
            </h1>
            <h5 class="my-3">
                <i class="fa fa-clock"> </i><?= $actualite->dateActu; ?>
            </h5>
            <p><img class="img-fluid w-100" src="<?= $actualite->photoActu; ?>" alt=""></p>
            <p class="fs-5 mt-5">
                <?= nl2br($actualite->descActu); ?>
            </p>
        </div>
        <div class="col-lg-3 col-md-12 offset-lg-1">
            <h5 class="text-primary">Categorie</h5>
            <p class="fs-5">
                <?= $actualite->categorieActu; ?>
            </p>
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