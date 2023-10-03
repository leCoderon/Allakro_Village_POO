<?php $title = "Allakro - Actualités"; ?>


<?php ob_start(); ?>



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Actualités</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Actualités</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Nos Actualités </h6>
            <h1 class="mb-4">Retrouvez toute l'actualité</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Récent</li>
                    <li class="mx-2" data-filter=".first">Générale</li>
                    <li class="mx-2" data-filter=".second">Naissances</li>
                    <li class="mx-2" data-filter=".third">Décès</li>
                    <li class="mx-2" data-filter=".fourth">Projets</li>
                    
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <!-- actualites -->
            <?php foreach ($actualites as $actualite): ?>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="<?= $actualite->photoActu; ?>" alt="<?= $actualite->photoActu; ?>">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="<?= $actualite->photoActu; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">
                            <?= $actualite->dateActu; ?>
                        </p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">
                        <?= substr($actualite->titreActu, 0, 90); ?>...
                        </h5>
                        <p>
                            <?= substr($actualite->descActu, 0, 90); ?> [...]
                        </p>
                        <p><a href="index.php?action=actualite_view&id=<?= $actualite->idActu; ?>">Lire la suite &rarr;</a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
                <!-- Projets -->
                <?php foreach ($projets as $projet): ?>
                <div class="col-lg-4 col-md-6 portfolio-item fourth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="<?= $projet->photoProj; ?>" alt="<?= $projet->photoProj; ?>">
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
                            <?= substr($projet->nomProj, 0, 90); ?>...
                        </h5>
                        <p>
                            <?= substr($projet->descProj, 0, 90); ?> [...]
                        </p>
                        <p><a href="index.php?action=projet_view&id=<?= $projet->idProj; ?>">Lire la suite &rarr;</a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- naissance -->
            <?php foreach ($naissances as $naissance): ?>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/naissance.jpeg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="assets/img/naissance.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">
                            <?= $naissance->dateNaisEnf; ?>
                        </p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">
                            Naissance de
                            <?= $naissance->nomEnf; ?>
                            <?= $naissance->prenEnf; ?>
                        </h5>
                        <p>
                            C'est avec un immense bonheur que la famille
                            <?= $naissance->nomPere; ?> vous annonçer l'arrivée de leur magnifique [...]
                        </p>
                        <p><a href="index.php?action=naissance_view&id=<?= $naissance->idNais; ?>">Lire la suite &rarr;</a>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>

            <!-- deces -->
            <?php foreach ($deces as $dece): ?>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/deces.jpeg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="assets/img/deces.jpeg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">
                            <?= $dece->dateDec; ?>
                        </p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">
                            Décès de
                            <?= $dece->nomDec; ?>
                            <?= $dece->prenDec; ?>
                        </h5>
                        <p>
                            La famille
                            <?= $dece->nomParent; ?> a le profond regret de vous annonçer le décès de leur [...]
                        </p>
                        <p><a href="index.php?action=deces_view&id=<?= $dece->idDec; ?>">Lire la suite &rarr;</a>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>
        

        </div>
    </div>
</div>
<!-- News End -->







<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>