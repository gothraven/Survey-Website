<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">PHP Ajax Insert Data in MySQL By Using Bootstrap Modal</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Enter Question</label>
                    <input type="text" name="name" id="nom_champ" class="form-control" />
                    <br />
                    <label>Select Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="Texte">Texte</option>
                        <option value="Nombre">Nombre</option>
                        <option value="Liste">Liste</option>
                        <option value="Email">Email</option>
                    </select>
                    <br />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>









<!--div class="modal fade" id="add_champ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form role="form" method="post" action="">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                    Ajouter un champ
                    </h4>
                </div>

                
                <div class="modal-body">


                    <div class="form-group">
                        <label for="exampleInputText">La Question</label>
                        <input type="Text" name="champ_name" class="form-control" id="champ_name" placeholder="Nom de questionaire" required value="<?= $data['nom_ques']??'' ?>">
                    </div>
                    <div>
                        <label for="exampleInputText">type de Question</label>
                        <select class="form-control" id="champ_type">
                            <option>Texte</option>
                            <option>Nombre</option>
                            <option>Liste</option>
                            <option>Email</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p class="debug-url"></p>
                    </div>
                </div>

                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button name="save_button" class='btn btn-primary btn-ok' id="save_button">
                        Save changes
                    </button>
                </div>

            </div>
        </div>
    </form>
</div-->