<?php $title = "Allakro - Contact"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Offres</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=homepage">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">offres</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Offer Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Nos Offres </h6>
            <h1 class="mb-4">Retrouvez toutes nos dernière offres d'emploi et d'opportunité</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Récent</li>

                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

            <?php foreach ($offres as $offre): ?>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/emploi.jpeg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="assets/img/emploi.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">
                            <?= $offre->dateOff; ?>
                        </p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">
                            <?= $offre->servOff; ?>
                        </h5>
                        <p>
                            <?= substr($offre->descOff, 0, 90); ?> [...]
                        </p>
                        <p><a href="index.php?action=offre_view&id=<?= $offre->idOff; ?>">Lire la suite &rarr;</a></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Offer End -->

<!-- Post offer Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Déposez une offre</h6>
                    <h1 class="mb-4">Saisissez les détails de votre offre </h1>
                    <form method="post" action="index.php?action=poster_offre">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom" required>
                                    <label for="nom">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                        placeholder="votre prenom" required>
                                    <label for="prenom">Votre prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="votre email" required>
                                    <label for="email">votre E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="numero" id="numero"
                                        placeholder="votre numero" required>
                                    <label for="numero">Numéro de téléphone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="service" id="service"
                                        placeholder="service offert" required>
                                    <label for="service">Service offert</label>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="competence" id="competence"
                                        placeholder="competence" required>
                                    <label for="competence">Competences</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="decrivez votre offre" name="description"
                                        id="description" style="height: 100px" required></textarea>
                                    <label for="description">Description de l'offre</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="description">Importez une photo (facultatif)</label>
                                    <input type="file" name="photo">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                    Soumettre
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img src="assets/img/emploi.jpeg" alt="" class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post offer End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>