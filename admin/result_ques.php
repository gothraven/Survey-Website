<?php
require("../auth/EtreAuthentifie.php");
$title = 'Result';
include("../header.php");
?>

    <div class='container'>
        <div class='well'>
            <div class='container'>
                <?php
if(isset($_GET["qid"])){
    
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $qid = $_GET["qid"];
    
    //security check
    $uid = $idm->getUid();
    $SQL = "SELECT uid FROM questionnaires WHERE qid=$qid";
    $result = $db->query($SQL);
    $id = $result->fetchColumn(0);
    if($id != $uid)redirect($pathFor['home']);
    
    $SQL = "SELECT intitule FROM questionnaires WHERE qid=$qid";
    $result = $db->query($SQL);
    $name = $result->fetchColumn(0);
}
?>
                    <div class="close pull-left" data-toggle='modal' data-target='#modif_ques_Modal'>
                        <h2><b>Resultat : <?=$name;?></b></h2>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class='list-group'>
            <div class='jumbotron'>
                <?php 
                $SQL = "SELECT * FROM champs WHERE qid = $qid ORDER BY ordre";
                $result = $db->query($SQL);
            
                foreach($result as $row){
                echo"<div class='list-group'>
                        <button class='list-group-item question' id='$row[cid]'><h5><b>$row[nom]</b></h5></button>
                        <button class='close pull-left' id='$row[cid]'><i class='glyphicon glyphicon-eye-open'></i></button>
                        <button class='close' data-href='supp_answers.php?cid=$row[cid]' data-toggle='modal' data-target='#delete-answers'><i class='glyphicon glyphicon-trash'></i></button>
                    </div>
                    <br/>";
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include("check_answers.php");
    include("check_question.php");
    include("delete_answers.php");
    ?>
        <script>
            $('#delete-answers').on('show.bs.modal', function (e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });
        </script>
        <script>
            $(document).ready(function () {
                $(document).on('click', 'button.pull-left', function () {
                    var id = $(this).attr("id");
                    $.ajax({
                        url: "send_answers.php",
                        method: "POST",
                        data: {
                            cid: id
                        },
                        success: function (data) {
                            $('#answers_here').html(data);
                            $('#check-answers').modal('show');
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(document).on('click', '.question', function () {
                    var id = $(this).attr("id");
                    $.ajax({
                        url: "send_question.php",
                        method: "POST",
                        data: {
                            cid: id
                        },
                        success: function (data) {
                            $('#question_here').html(data);
                            $('#check-question').modal('show');
                        }
                    });
                });
            });
        </script>

        <?php
include("../footer.php");
?>