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
    $SQL = "SELECT intitule FROM questionnaires WHERE qid=$qid";
    $result = $db->query($SQL);
    $name = $result->fetchColumn(0);
}
?>
                    <button class="close pull-left" data-toggle='modal' data-target='#modif_ques_Modal'>
                        <h2><b>Resultat : <?=$name;?></b></h2>
                    </button>
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
                        <button href='admin/modif_ques.php?qid=$qid' onClick='return confirm('Voulez allez voir la questionaire et repondre?');' class='list-group-item'><h5><b>$row[nom]</b></h5></button>
                        <button class='close pull-left' id='$row[cid]' data-toggle='modal' data-target='#check-answers'><i class='glyphicon glyphicon-eye-open'></i></button>
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
    include("delete_answers.php");
    ?>
        <script>
            $('#delete-answers').on('show.bs.modal', function (e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });
        </script>

        <?php
include("../footer.php");
?>