<div id="modifname_ques_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modifer le nom de questionnaire</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="modifques_form">
                    <label>Enter le nom de questionnaire</label>
                    <input type="text" name="nom_ques" id="nom_ques" class="form-control" />
                    <input type="hidden" name="qid" value="<?=$qid;?>">
                    <br />
                    <input type="submit" name="modify" id="modify" value="Modify" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>