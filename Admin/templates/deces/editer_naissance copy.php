<?php $title = "Admin - editer naissance"; ?>

<?php ob_start(); ?>

<!-- FORM START-->
<div class="col-md-12 col-lg-6 offset-lg-3 py-4">

<h1 class="mb-4">Déclarer une nouvelle naissance </h1>
<form method="post" action="index.php?action=naissance/modifier_naissance&id=<?= $naissance->idNais; ?>">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomEnf" id="nom"
                    placeholder="Nom de l'enfant" value="<?= $naissance->nomEnf; ?>" required>
                <label for="nom">Nom de l'enfant</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="prenomEnf" id="prenom"
                    placeholder="prénom de l'enfant" value="<?= $naissance->prenEnf; ?>" required>
                <label for="prenom">prénom de l'enfant</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="email" name="sexeEnf"
                    placeholder="sexe de l'enfant (Fille/Garçon)" value="<?= $naissance->sexEnf; ?>" required>
                <label for="email">sexe de l'enfant (Fille/Garçon)</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" name="dateNais" id="date"
                    placeholder="Date de naissance de l'enfant" value="<?= $naissance->dateNaisEnf; ?>" required>
                <label for="date">Date de naissance de l'enfant</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="modeNais" id="mode"
                    placeholder="Mode de naissance de l'enfant" value="<?= $naissance->modeNaisEnf; ?>" required>
                <label for="mode">Mode de naissance de l'enfant</label>
                <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le quartier</span>
            </div>
        </div>



        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomPere" id="nompere"
                    placeholder="Nom du pèreprénom du père" value="<?= $naissance->nomPere; ?>" required>
                <label for="nompere">Nom du père</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="prenomPere" nomMere id="prenomPere"
                    placeholder="prénom du père" value="<?= $naissance->prenPere; ?>" required>
                <label for="prenomPere">prénom du père</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomMere" id="nomMere"
                    placeholder="Nom du pèreprénom de la mère" value="<?= $naissance->nomMere; ?>" required>
                <label for="nomMere">Nom de la mère</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="prenomMere" id="prenomMere"
                    placeholder="prénom de la mère" value="<?= $naissance->prenMere; ?>" required>
                <label for="prenomMere">prénom de la mère</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="lieuHab" id="lieuHab"
                    placeholder="Lieu d'habitation de l'enfant" value="<?= $naissance->lieuHabEnf; ?>" required>
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
<!-- FORM END -->

<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>