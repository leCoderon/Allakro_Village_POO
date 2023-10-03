<?php $title = "Allakro - Maladie"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Maladie & épidémie</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="#">Maladie & épidémie</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container-xxl py-5">

<div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

<!-- Maladie start -->
<?php foreach ($maladies as $maladie): ?>
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid w-100 h-100" src="<?= $maladie->photoMal; ?>" alt="<?= $maladie->photoMal; ?>">
            <div class="portfolio-btn">
                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= $maladie->photoMal; ?>"
                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
            </div>
        </div>
        <div class="pt-3">
            <hr class="text-primary w-25 my-2">
            <h5 class="lh-base">
                <?= substr($maladie->libMal, 0, 90); ?>...
            </h5>
            <p>
                <?= substr($maladie->descMal, 0, 90); ?> [...]
            </p>
            <p><a href="index.php?action=maladie_view&id=<?= $maladie->idMal; ?>">Lire la suite &rarr;</a>
            </p>
        </div>
    </div>
<?php endforeach; ?>
<!-- Maladie end -->
</div>
</div>






<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>