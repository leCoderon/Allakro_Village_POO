<!-- eiditer article -->
<div class="modal fade" id="edit<?= $deces_attente->idDec ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de la boîte de dialogue modale. -->
                <!-- form -->
                <form method="post" action="index.php?action=deces_attente/confirme&id=<?= $deces_attente->idDec; ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomDec" id="nom"
                                        placeholder="Nom du défunt" value="<?= $deces_attente->nomDec ?>" required>
                                    <label for="nom">Nom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomDec" id="prenom"
                                        placeholder="prénom du défunt" value="<?= $deces_attente->prenDec ?>" required>
                                    <label for="prenom">prénom du défunt</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sexe" name="sexeDec"
                                        placeholder="sexe du défunt (Fille/Garçon)" value="<?= $deces_attente->sexDec ?>" required>
                                    <label for="sexe">sexe(Fille/Garçon)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateNaisDec" id="date"
                                        placeholder="Date de naissance du défunt" value="<?= $deces_attente->dateNaisDec ?>" required>
                                    <label for="date">Date de naissance</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dateDec" id="date"
                                        placeholder="date de décès du défunt" value="<?= $deces_attente->dateDec ?>" required>
                                    <label for="date">Date de décès</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="causeDec" id="cause"
                                        placeholder="lieu de décès du défunt" value="<?= $deces_attente->causeDec ?>" required>
                                    <label for="cause">cause du décès</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuDec" id="lieu"
                                        placeholder="lieu de décès du défunt" value="<?= $deces_attente->lieuDec ?>" required>
                                    <label for="lieu">lieu du décès</label>
                                    <span class="text-muted">NB: hôpital (indiquer le nom de l’hôpital) ou le
                                        domicile</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomParent" nomMere id="nomp"
                                        placeholder="Nom parent du défunt" value="<?= $deces_attente->nomParent ?>" required>
                                    <label for="nomp">Nom du parent</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenomParent" id="prenomp"
                                        placeholder="prénom du parent du défunt" value="<?= $deces_attente->prenParent ?>" required>
                                    <label for="prenomp">Prénom du parent</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lieuHabDec" id="lieu"
                                        placeholder="Lieu de résidence du défunt" value="<?= $deces_attente->lieuHabDec ?>" required>
                                    <label for="lieu">Domicile</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fonctDec" id="fonct"
                                        placeholder="Fonctiosexen du défunt" value="<?= $deces_attente->fonctDec ?>" required>
                                    <label for="fonct">Fonction du défunt</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                Confirmé
                                </button>
                            </div>

                        </div>
                    </form>
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
<div class="modal fade" id="delete<?= $deces_attente->idDec ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suprimer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5 class="">êtes vous sûre de vouloir supprimer cet élément de la liste? Cette méthode est
                        irréversible</h5>
                    <p class="text-center"> <i class="bi bi-exclamation-triangle display-1 text-danger"></i>
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <a href="index.php?action=deces_attente/suprimer_deces&id=<?= $deces_attente->idDec ?>"
                        class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                    <!-- <button type="button" class="btn btn-primary">Enregistrer les modifications</button> -->
                </div>
            </div>
        </div>
    </div>