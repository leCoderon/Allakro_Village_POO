<?php $title = "Allakro - Deces"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=deces">Décès</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Décès</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
        <h1 class="display-5 mb-3 animated slideInDown">
            Décès de
            <?= $deces->nomDec; ?>
            <?= $deces->prenDec; ?>
        </h1>
        <p><img class="img-fluid w-100 h-25" src="assets/img/deces.jpeg" alt=""></p>

            <p class="fs-5">La famille
                <?= $deces->nomParent; ?> a le profond regret de vous annoncer le décès de leur fils/fille
                <?= $deces->prenDec; ?>
                <?= $deces->nomDec; ?> survenu
                le
                <?= $deces->dateDec; ?> à
                <?= $deces->lieuDec; ?>
            </p>
            
        </div>
        <div class="col-lg-3 col-md-12 offset-lg-1">
            <h5 class="text-primary">date de naissance du défunt</h5>
            <p class="fs-5">
                <?= $deces->dateNaisDec; ?>
            </p>
            <h5 class="text-primary">Cause du décès</h5>
            <p class="fs-5">
                <?= $deces->causeDec; ?>
            </p>

            <h5 class="text-primary">Domicile du défunt</h5>
            <p class="fs-5">
                <?= $deces->lieuHabDec; ?>
            </p>

            <h5 class="text-primary">Fonction du défunt</h5>
            <p class="fs-5">
                <?= $deces->fonctDec; ?>
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
</div>



<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>