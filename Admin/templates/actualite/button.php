<!-- eiditer article -->
<div class="modal fade" id="edit<?= $actualite->idActu ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                        <form method="post"
                            action="index.php?action=actualite/modifier_actualite&id=<?= $actualite->idActu; ?>">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="titre" id="titre"
                                            placeholder="Titre de l'actualité" value="<?= $actualite->titreActu; ?>"
                                            required>
                                        <label for="titre">Titre de l'actualité</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="categorie" id="Catégorie"
                                            placeholder="Catégorie" value="<?= $actualite->categorieActu; ?>" required>
                                        <label for="Catégorie">Catégorie</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date" id="date" placeholder="date"
                                            value="<?= $actualite->dateActu; ?>" required>
                                        <label for="date">Date</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Descrption"
                                            id="Descrption" style="height: 200px"
                                            required><?= $actualite->descActu; ?></textarea>
                                        <label for="message">Descrption</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="image" id="image"
                                            placeholder="Entrer l'url de l'image" value="<?= $actualite->photoActu; ?>"
                                            required>
                                        <label for="image">Entrer l'url de l'image</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5"
                                        type="submit">Terminé</button>
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
<div class="modal fade" id="delete<?= $actualite->idActu ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                    <a href="index.php?action=actualite/suprimer_actu&id=<?= $actualite->idActu ?>"
                        class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                    <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
                </div>
            </div>
        </div>
    </div>