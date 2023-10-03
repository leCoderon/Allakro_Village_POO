<!-- eiditer article -->
<div class="modal fade" id="edit<?= $demenage->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- FORM -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 py-4">

                        <form method="post" action="index.php?action=demenage/modifier_demenage&id=<?= $demenage->id ?>">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" id="titre"
                                            placeholder="Titre de l'actualité" value="<?= $demenage->nom ?>" required>
                                        <label for="titre">nom</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="prenom" id="titre"
                                            placeholder="Titre de l'actualité" value="<?= $demenage->prenom ?>" required>
                                        <label for="titre">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="destination" id="Catégorie"
                                            placeholder="Catégorie" value="<?= $demenage->destination ?>" required>
                                        <label for="Catégorie">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date" id="date" placeholder="date"
                                        value="<?= $demenage->dateNais ?>" required>
                                        <label for="date">Date de naissance</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="sexe" id="date" placeholder="date"
                                        value="<?= $demenage->sexe ?>" required>
                                        <label for="date">Sexe (M/F)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="domicile" id="date"
                                            placeholder="date" value="<?= $demenage->lieuHab ?>" required>
                                        <label for="date">Domicile</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fonction" id="date"
                                            placeholder="date" value="<?= $demenage->fonct ?>" required>
                                        <label for="date">Fonction</label>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5"
                                        type="submit">Soumettre</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- FORM END -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
            </div>
        </div>
    </div>
</div>
<!-- eidter article end -->

<!-- Supprimer article -->
<div class="modal fade" id="delete<?= $demenage->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suprimer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5 class="">êtes vous de vouloir supprimer cet élément de la liste? Cette méthode est
                        irréversible</h5>
                    <p class="text-center"> <i class="bi bi-exclamation-triangle display-1 text-danger"></i>
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <a href="index.php?action=demenage/suprimer_demenage&id=<?= $demenage->id ?>"
                        class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                    <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
                </div>
            </div>
        </div>
    </div>
</div>