<div class="modal fade" id="add_questionaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form role="form" method="post" action="">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                    Ajouter une questionaire
                </h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputText">Nom de Questionaire</label>
                        <input type="Text" name="nom_ques" class="form-control" id="exampleInputText" placeholder="Nom de questionaire" required value="">
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button class='btn btn-primary btn-ok' id="save">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>