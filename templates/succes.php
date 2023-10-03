<?php $title = "Allakro - "; ?>


<?php ob_start(); ?>



<!-- success Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <p><i class="bi bi-check-circle display-1 text-primary"></i></p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Retour</a>
            </div>
        </div>
    </div>
</div>
<!-- success End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>