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
                    <input type="text" name="nom_champ" id="nom_champ" class="form-control" />
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