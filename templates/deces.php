<?php $title = "Allakro - Décès"; ?>


<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Décès</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php?action=homepage">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Décès</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Offer Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Décès </h6>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

            <!-- deces -->
            <?php foreach ($deces as $dece): ?>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/deces.jpeg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="assets/img/deces.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
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
<!-- Offer End -->

<!-- Post offer Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Déclarer un décès</h6>
                    <h1 class="mb-4">Veuillez renseignez le formulaire ci-dessous </h1>
                    <form method="post" action="index.php?action=declarer_deces">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomDec" id="nom"
                                        placeholder="Nom du défunt">
                                    <label for="nom">Nom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomDec" id="prenom"
                                        placeholder="prénom du défunt">
                                    <label for="prenom">prénom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sexe" name="sexeDec"
                                        placeholder="sexe du défunt (Fille/Garçon)">
                                    <label for="sexe">sexe du défunt (Fille/Garçon)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateNaisDec" id="date"
                                        placeholder="Date de naissance du défunt">
                                    <label for="date">Date de naissance du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateDec" id="date"
                                        placeholder="date de décès du défunt">
                                    <label for="date">date de décès du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="causeDec" id="cause"
                                        placeholder="lieu de décès du défunt">
                                    <label for="cause">cause de décès du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuDec" id="lieu"
                                        placeholder="lieu de décès du défunt">
                                    <label for="lieu">lieu de décès du défunt</label>
                                    <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le
                                        domicile</span>
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomParent" nomMere id="nomp"
                                        placeholder="Nom parent du défunt">
                                    <label for="nomp">Nom du parent du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomParent" id="prenomp"
                                        placeholder="prénom du parent du défunt">
                                    <label for="prenomp">Prénom du parent du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuHabDec" id="lieu"
                                        placeholder="Lieu de résidence du défunt">
                                    <label for="lieu">Lieu de résidence du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fonctDec" id="fonct"
                                        placeholder="Fonctiosexen du défunt">
                                    <label for="fonct">Fonction du défunt</label>
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
                    <img src="assets/img/deces.webp" alt="" class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post offer End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>