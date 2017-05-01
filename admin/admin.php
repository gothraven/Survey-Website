<?php
echo"<div class='container'>";                   
echo"<div class='well'>
<div class='list-group'>";
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $uid = $idm->getUid();
    $SQL = "SELECT qid,intitule FROM questionnaires WHERE uid=$uid";
    $result = $db->query($SQL);
    
    foreach($result as $row){
        $SQL1 = "SELECT COUNT(cid) FROM donnees WHERE cid = (SELECT cid FROM champs WHERE qid = $row[qid] LIMIT 1)";
        $res = $db->query($SQL1);
        $answers_num = $res->fetchColumn(0);
        echo "<div class='list-group'>
        <a href='#' class='list-group-item' ><span class='badge'>$answers_num</span><h5><b>$row[intitule]</b></h5></a>
        <button class='close' data-href='admin/supp_ques.php?qid=$row[qid]' data-toggle='modal' data-target='#confirm-delete'><i class='glyphicon glyphicon-trash'></i></button>
        <a href='admin/modif_ques.php?qid=$row[qid]' class='close' role='button'><i class='glyphicon glyphicon-cog'></i></a>
        <a href='admin/result_ques.php?qid=$row[qid]' class='close pull-left' role='button'><i class='glyphicon glyphicon-search'></i></a>";
        echo "</div>
        <br />";
    }

echo "</div>";

include("suppq_popup.php");
echo "</div>";
?>

    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

    </script>

    <?php

echo "</div>";
echo "<div style='text-align:center'>
        <button class='btn btn-primary' data-toggle='modal' data-target='#add_questionaire'>
            <i class='glyphicon glyphicon-plus'></i>
        </button>
</div>";
        include("admin/addq_popup.php");
?>
        <script>
            $('#save').click(function() {
                $name = $("input[name='nom_ques']").val();
                if ($name == "") {
                    alert("survey name can not be empty");
                } else {
                    $url = 'admin/add_ques.php?name=' + $name;
                    window.open($url);
                }
            });

        </script>
        <?php
?>
