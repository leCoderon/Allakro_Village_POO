<?php $title = "Allakro - offre"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=offre">Offres</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">offre</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Offer Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center portfolio-container wow fadeInUp" data-wow-delay="0.5s">

            <div class="justify-content-right">
                <div class="col-lg-8 col-md-6 portfolio-item first">
                    <h1 class="display-5 mb-3 animated slideInDown">
                        <?= $offre->servOff ?>
                    </h1>
                    <h5 class="text-primary">Description</h5>
                    <p class="fs-5">
                        <?= nl2br($offre->descOff); ?>
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-3  offset-lg-1 col-md-6 portfolio-item first">
                <h5 class="text-primary">Contact</h5>
                <p>Auteur :
                    <?= $offre->nomOff; ?>
                    <?= $offre->nomOff; ?>
                </p>
                <p>Email :
                    <?= $offre->emailOff; ?>
                </p>
                <p>Tel :
                    <?= $offre->telOff; ?>
                </p>
                <h5 class="text-primary">Compétences/Qualifications</h5>
                <p>
                    <?= $offre->qualifOff; ?>
                </p>
                <h5 class="text-primary">Partagez ce contenu</h5>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-dark btn-social me-1" href=""><i
                                class="fab fa-twitter  "></i></a>
                        <a class="btn btn-square btn-outline-dark btn-social me-1" href=""><i
                                class="fab fa-facebook-f "></i></a>
                        <a class="btn btn-square btn-outline-dark btn-social me-1"
                            href="https://youtu.be/8WgSBlevdXQ?si=4T5WbQ6cF604h0SN"><i class="fab fa-youtube "></i></a>
                        <a class="btn btn-square btn-outline-dark btn-social" href=""><i
                                class="fab fa-linkedin-in  "></i></a>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Offer End -->



<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>