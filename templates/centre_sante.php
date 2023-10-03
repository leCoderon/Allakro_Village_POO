<?php $title = "Allakro - centre_sante"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Centres de santé</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">centres de santé</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->





<!-- Feature Start -->
<?php foreach ($centres as $centre): ?>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="mb-4 text-primary">
                            <?= $centre->nomCentre; ?>
                        </h1>
                        <p class="mb-4 pb-2 ">
                            <?= $centre->descCentre; ?>
                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0 text-primary">Services offerts</p>
                                        <h5 class="mb-0">
                                            <?= $centre->serviceCentre; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4 text-primary">
                                        <p class="mb-0">Localisation</p>
                                        <h5 class="mb-0">
                                            <?= $centre->localCentre; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= $centre->photoCentre; ?>"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Feature End -->

<div class="pt-5">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1JAB9fovRAbp2S5G0heduW87vmDzYKPc&ehbc=2E312F" width="100%"
        height="500"></iframe>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>