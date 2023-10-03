<?php $title = "Allakro - Projet"; ?>


<?php ob_start(); ?>



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Projets</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Projets</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Projets Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Nos Projets </h6>
        </div>
            <!-- <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Récent</li>
                        <li class="mx-2" data-filter=".first">Générale</li>
                        <li class="mx-2" data-filter=".second">Naissances</li>
                        <li class="mx-2" data-filter=".third">Décès</li>
                    
                    </ul>
                </div>
            </div> -->
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <!-- Projets -->
            <?php foreach ($projets as $projet): ?>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid w-100" src="<?= $projet->photoProj; ?>" alt="<?= $projet->photoProj; ?>">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="<?= $projet->photoProj; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">
                            <?= $projet->date; ?>
                        </p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">
                            <?= $projet->nomProj; ?>
                        </h5>
                        <p>
                            <?= substr($projet->descProj, 0, 90); ?> [...]
                        </p>
                        <p><a href="index.php?action=projet_view&id=<?= $projet->idProj; ?>">Lire la suite &rarr;</a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            


        </div>
    </div>
</div>
<!-- Projets End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>