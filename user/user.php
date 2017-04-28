<?php
echo"<div class='container'>";
echo"<div class='well'>
<div class='list-group'>";
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $SQL = "SELECT qid,intitule FROM questionnaires";
    $res = $db->query($SQL);
    foreach($res as $row){
        echo"<button class='list-group-item questionnaire' id='$row[qid]'><h4><b>$row[intitule]</b></h4></button>";
    }
echo "</div>";
echo "</div>";
echo "</div>";
include("repond_questionnaire.php");
include("done_answering.php");
?>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.questionnaire', function () {
                var id = $(this).attr("id");
                $.ajax({
                    url: "user/getName_questionnaire.php",
                    method: "POST",
                    data: {
                        qid: id
                    },
                    success: function (data) {
                        $('.modal-title').html(data);
                    }
                });
                $.ajax({
                    url: "user/send_questionnaire.php",
                    method: "POST",
                    data: {
                        qid: id
                    },
                    success: function (data) {
                        $('#questionnaire_here').html(data);
                        $('#repond-questionnaire').modal('show');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#repond-questionnaire').on("submit", function (event) {
                var refCode = "qsdqsd22ds2";
                var thank = "Thank you for answering, here is your reference code ' " + refCode + " '.";
                alert(thank);
            });
        });
    </script>