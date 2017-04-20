<form method="post">
    <div class="col-md-offset-3 col-md-6">
        <div class="modal fade" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <div class="titre">
                            <h3>Confirmation De La Suppression</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="titre2">regelement :</p>
                        <ul id="list">
                            <div class="regle">
                                <li class="gras" style="list-style-type: disc;">si vous effectuer cette operation le produit sera supprimé d'une maniere difinitive.</li>
                                <li class="gras" style="list-style-type: disc;">Si vous voulez juste modifier ou reduire la quantité de votre produit on vous suggére de le modifier soit en allant a la partie modification "modifier un produit" ou bien cliquez sur <a href="#modifqte.php">ce lien </a> .</li>
                                <li class="gras" style="list-style-type: disc;">L'action ne s'effecutera pas tant que vous n'avez pas remplie tout les champs du formulaire et vous allez voir apparaitre un message indiquant le champs vide .</li>
                                <li class="gras" style="list-style-type: disc;">Si vous souhaitez vraiment supprimer le produit cliquez sur "Je Confirme".</li>
                                <li class="gras" style="list-style-type: disc;">Si vous voulez abondonner la demarche cliquez sur "j'Abondonne".</li>
                            </div>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="delete" value="Je Confirme" class="btn btn-success">
                        <input type="submit" name="cancel" value="J'Abondonne" class="btn btn-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>