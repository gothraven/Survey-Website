<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter une nouvell question</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Enter Question</label>
                    <input type="text" name="nom_champ" id="nom_champ" class="form-control" />
                    <input type="hidden" name="qid" value="<?=$qid;?>">
                    <br />
                    <label>Select Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="lText">Little Text</option>
                        <option value="bText">Big Text</option>
                        <option value="Number">Number</option>
                        <option value="Yes/No">Yes/No</option>
                        <option value="Email">Email</option>
                        <option value="Range">Range 1-10</option>
                        <option value="Date">Date</option>
                        <option value="List">List</option>
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