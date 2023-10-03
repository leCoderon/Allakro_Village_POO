<?php $title = "Allakro - Pharmacie"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Pharmacie</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">pharmacie</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->





<!-- Feature Start -->
<?php foreach ($pharmacies as $pharmacie): ?>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="mb-4 text-primary">
                            <?= $pharmacie->nomPharm; ?>
                        </h1>
                        <p class="mb-4 pb-2">
                            <?= $pharmacie->descPharm; ?>
                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <!-- <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div> -->
                                    <div class="ms-4">
                                        <p class="mb-0 text-primary">Période de garde</p>
                                        <h5 class="mb-0 fs-6 ">
                                            <?= $pharmacie->periodGard; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <!-- <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div> -->
                                    <div class="ms-4">
                                        <p class="mb-0 text-primary">Localisation</p>
                                        <h5 class="fs-6">
                                            <?= $pharmacie->localPharm; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= $pharmacie->photoPharm; ?>"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Feature End -->

<div class="pt-5">
    <!-- <h5 class="text-primary text-center mt-5 fs-3">Cartographie des différentes pharmacie dans le village d'Allakro et -->
        <!-- au alentours</h5> -->
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1d8SbQrb-11e3cYAIlv12RNJBf6vOxb4&ehbc=2E312F" width="100%"
        height="500"></iframe>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>