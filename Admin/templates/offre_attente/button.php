<!-- eiditer article -->
<div class="modal fade" id="edit<?= $offre_attente->idOff ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <form method="post" action="index.php?action=offre_attente/confirme&id=<?= $offre_attente->idOff ?>">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" id="nom"
                                            placeholder="votre nom" value="<?= $offre_attente->nomOff ?>" required>
                                        <label for="nom">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="prenom" id="prenom"
                                            placeholder="votre prenom" value="<?= $offre_attente->prenOff ?>" required>
                                        <label for="prenom">Votre prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="votre email" value="<?= $offre_attente->emailOff ?>" required>
                                        <label for="email">votre E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="numero" id="numero"
                                            placeholder="votre numero" value="<?= $offre_attente->telOff ?>" required>
                                        <label for="numero">Numéro de téléphone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="service" id="service"
                                            placeholder="service offert" value="<?= $offre_attente->servOff ?>" required>
                                        <label for="service">Service offert</label>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="competence" id="competence"
                                            placeholder="competence" value="<?= $offre_attente->qualifOff ?>" required>
                                        <label for="competence">Competences</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="decrivez votre offre"
                                            name="description" id="description" required
                                            style="height: 100px"><?= $offre_attente->descOff ?></textarea>
                                        <label for="description">Description de l'offre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="description" value="<?= $offre_attente->photoff ?>">Importez une photo
                                            (facultatif)</label>
                                        <input type="file" name="photo">
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
<div class="modal fade" id="delete<?= $offre_attente->idOff ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                    <a href="index.php?action=offre_attente/suprimer&id=<?= $offre_attente->idOff ?>" class="btn btn-danger"><span
                            class="glyphicon glyphicon-trash"></span> Supprimer</a>
                    <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
                </div>
            </div>
        </div>
    </div>