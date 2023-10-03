<!-- eiditer article -->
<div class="modal fade" id="edit<?= $maladie->idMal ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                    <form method="post" action="index.php?action=maladie/modifier_maladie&id=<?= $maladie->idMal ?>">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" id="titre"
                                            placeholder="Titre de la pharmacie" value="<?= $maladie->libMal ?>" required>
                                        <label for="titre">Nom de maladie/épidémie</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="image" id="Catégorie"
                                            placeholder="Catégorie" value="<?= $maladie->photoMal ?>" required>
                                        <label for="Catégorie">Url de l'image image</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Descrption"
                                            id="Descrption" style="height: 100px" required><?= $maladie->descMal ?></textarea>
                                        <label for="message">Description</label>
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
<div class="modal fade" id="delete<?= $maladie->idMal ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                    <a href="index.php?action=maladie/suprimer_maladie&id=<?= $maladie->idMal ?>"
                        class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                    <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
                </div>
            </div>
        </div>
    </div>
</div>