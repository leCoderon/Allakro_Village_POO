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

</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-3">
            <h2 class="m-0 text-white">Allakro Village</h2>
        </a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"><i
                    class="fa fa-user fa-2x"></i></a>
            <div class="dropdown-menu bg-light me-5">
                <a href="index.php?action=logout" class="dropdown-item">Se déconnecter</a>

            </div>
        </div>
        <button type="button" class="navbar-toggler me-4 bg-light" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 ">
                <a href="index.php?action=homepage" class="nav-item nav-link text-white">Acceuil</a>

                <a href="index.php?action=actualite/actualite" class="nav-item nav-link text-white">Actualités </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Naissance</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=naissance/naissance" class="dropdown-item">Postées</a>
                        <a href="index.php?action=naissance_attente/naissance_attente" class="dropdown-item">En
                            attente</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Décès</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=deces/deces" class="dropdown-item">Postés</a>
                        <a href="index.php?action=deces_attente/deces_attente" class="dropdown-item">En attente</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Offres</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=offre/offre" class="dropdown-item">Postées</a>
                        <a href="index.php?action=offre_attente/offre_attente" class="dropdown-item">En attente</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Sante</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=pharmacie/pharmacie" class="dropdown-item">Pharmacies</a>
                        <a href="index.php?action=centre/centre" class="dropdown-item">Centres de Santé</a>
                        <a href="index.php?action=maladie/maladie" class="dropdown-item">Maladies & épidémies</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Communauté</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?action=acteur/acteur" class="dropdown-item">Acteurs</a>
                        <a href="index.php?action=amenage/amenage" class="dropdown-item">Aménagement</a>
                        <a href="index.php?action=demenage/demenage" class="dropdown-item">Déménagement</a>

                    </div>
                </div>
                <a href="index.php?action=projet/projet" class="nav-item nav-link text-white">projet</a>


            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Content start -->

    <?= $content ?>
    <!-- Content end -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
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