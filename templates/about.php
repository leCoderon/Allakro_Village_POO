<?php $title = "Allakro - A propos du village d'Allakro"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">A propos du village d'Allakro</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Acceuille</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">A propos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->





<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden mb-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100 w-100">
                    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/QrSN9yZuy-0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe> -->
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">A propos de nous</h6>
                    <h1 class="mb-4">+49 D'existence Et De Développement</h1>
                    <p>Le village Allakro du nom de son tout premier chef N’DA ALLA, à été fondé en 1974.</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>+4000 Habitants avec
                        plusieurs nationalités qui y cohabitent.</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>De nombreuses infrastructures</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Une population entreprenante et dynamique
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- history Start -->
<div class=" pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Notre histoire</h6>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 wow fadeInUp fs-5" data-wow-delay="0.1s">
                <p>Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000
                    habitants. Il est délimité par la commune d’Adjamé et le camp de la gendarmerie
                    Agban. Situé non loin de l’Université Virtuelle de Côte d’Ivoire, Allakro a pour
                    voisins immédiats le Tribunal du Commerce d’Abidjan, le Consulat du Sénégal et
                    la Fondation DONWAHI. Allakro regorge une population cosmopolite avec
                    plusieurs nationalités qui y cohabitent. On y trouve des Ivoiriens, des Burkinabés,
                    des Togolais, des Béninois, des Guinéens, des Maliens et des Ghanéens etc. La
                    population exerce la plupart du temps dans le secteur informel. Ainsi, la principale
                    activité est le commerce avec la vente du “garba” (attieké poisson), de boisson,
                    produits vivriers, de fruits et légumes, les kiosques à café, des meubles et mobilier
                    de maison etc. Le village Allakro du nom de son tout premier chef N’DA ALLA,
                    est doté d’un certain nombre d'infrastructures tel que : une école (maternelle et
                    primaire), une mosquée et une église etc.</p>
            </div>


        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4">
            
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zZnYZYAWsu2aM3IVQumPPjA5jZrudsA&ehbc=2E312F"
                    width="100%" height="480"></iframe>
            </div>

        </div>
    </div>
</div>
<!-- history End -->


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>