<?php $title = "Allakro - Naissance"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Naissances</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=homepage">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">naissances</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Offer Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Naissances </h6>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

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
                        <p><a href="index.php?action=naissance_view&id=<?= $naissance->idNais; ?>">Lire la suite &rarr;</a></p>

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
                    <h6 class="text-primary">Déclarer une naissance</h6>
                    <h1 class="mb-4">Veuillez renseignez le formulaire ci-dessous </h1>
                    <form method="post" action="index.php?action=declarer_naissance">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomEnf" id="nom" placeholder="Nom de l'enfant">
                                    <label for="nom">Nom de l'enfant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomEnf" id="prenom" placeholder="prénom de l'enfant">
                                    <label for="prenom">prénom de l'enfant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" name="sexeEnf" placeholder="sexe de l'enfant (Fille/Garçon)">
                                    <label for="email">sexe de l'enfant (Fille/Garçon)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateNais" id="date" placeholder="Date de naissance de l'enfant">
                                    <label for="date">Date de naissance de l'enfant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="modeNais" id="mode" placeholder="Mode de naissance de l'enfant">
                                    <label for="mode">Mode de naissance de l'enfant</label>
                                    <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le quartier</span>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomPere" id="nompere" placeholder="Nom du pèreprénom du père">
                                    <label for="nompere">Nom du père</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomPere"nomMere id="prenomPere" placeholder="prénom du père">
                                    <label for="prenomPere">prénom du père</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomMere" id="nomMere" placeholder="Nom du pèreprénom de la mère">
                                    <label for="nomMere">Nom de la mère</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomMere" id="prenomMere" placeholder="prénom de la mère">
                                    <label for="prenomMere">prénom de la mère</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuHab" id="lieuHab" placeholder="Lieu d'habitation de l'enfant">
                                    <label for="lieuHab">Lieu d'habitation de l'enfant</label>
                                    <span class="text-muted">NB: à défaut lieu d’habitation de la mère</span>
                                </div>
                            </div>

                            
                            
                            <div class="col-12">
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
                    <img src="assets/img/naissance.jpeg" alt="" class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post offer End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>