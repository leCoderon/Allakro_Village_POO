<!DOCTYPE html>
<html>


<head>
    <title>
        <?= $title ?>
    </title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="mystyle.css">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Allakro...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small> Allakro, Cocody, Abidjan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Sam : 08.30 AM - 17.30</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+255 0584784581</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0"
                        href="https://youtu.be/8WgSBlevdXQ?si=4T5WbQ6cF604h0SN"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">Allakro</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Acceuil </a>
                <a href="index.php?action=about" class="nav-item nav-link">A propos</a>
                <a href="index.php?action=news" class="nav-item nav-link">Actualités</a>
                <a href="index.php?action=offre" class="nav-item nav-link">Offres</a>
                <a href="index.php?action=projet" class="nav-item nav-link">Projets</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sante</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=pharmacie" class="dropdown-item">Pharmacies</a>
                        <a href="index.php?action=centre_sante" class="dropdown-item">Centres de Santé</a>
                        <a href="index.php?action=maladie" class="dropdown-item">Maladies & épidémies</a>

                    </div>
                </div>

            </div>
            <!-- <a href="admin/index.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Admin<i
                    class="fa fa-arrow-right ms-3"></i></a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <?php if (isset($_SESSION['acteur'])): ?>
                        <?= $_SESSION['acteur']['nom_act'] . " " . $_SESSION['acteur']['pren_act']; ?>
                    <?php else: ?> <i class="fa fa-user"></i> S'identifier
                    </a>
                <?php endif; ?>
                <div class="dropdown-menu bg-light m-0">
                    <?php if (!isset($_SESSION['acteur'])): ?>
                        <a href="templates/login.php" class="dropdown-item">Se connecter</a>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['acteur'])): ?>
                        <a href="templates/amenagement.php" class="dropdown-item">Je viens d'aménager</a>
                        <a href="templates/demenagement.php" class="dropdown-item">Je déménage</a>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['acteur'])): ?>
                        <a href="index.php?action=logout" class="dropdown-item">Se déconnecter <i
                                class="fa fa-power-off"></i></a>
                    <?php endif; ?>
                    




                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content start -->

    <?= $content ?>
    <!-- Content end -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Adresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Allakro, Cocody, Abidjan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+255 0584784581</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>pedagogie@uvci.edu.ci</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social"
                            href="https://youtu.be/8WgSBlevdXQ?si=4T5WbQ6cF604h0SN"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Liens Rapides</h5>
                    <a class="btn btn-link" href="index.php?action=about">A Propos</a>
                    <a class="btn btn-link" href="index.php?action=centre_sante">Centres de santé</a>
                    <a class="btn btn-link" href="index.php?action=news">Actualités</a>
                    <a class="btn btn-link" href="index.php?action=offre">Offres</a>
                    <a class="btn btn-link" href="index.php?action=pharmacie">Pharmacies</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Gallerie</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-2.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="assets/img/gal-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        2023 &copy; <a href="index.php">Allakro Village</a>, Tous droits résevés.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Réalisé par <a href="#">Groupe 2 PCT</a>
                        <!-- <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="mailto:ismael.camara@uvci.edu.ci" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>


</body>

</html>