<?php

echo"<div>
<h4 style='text-align:center'> I'm an ADMIN</h4>
</div>";;
                   
echo"<div class='well'>
<div class='list-group'>";
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $SQL = "SELECT qid,intitule FROM questionnaires";
    $res = $db->query($SQL);
    
    foreach($res as $row){
        echo "<div class='list-group'>
        <a href='admin/repond_ques.php?qid=$row[qid]' onClick=\"return confirm('Voulez allez voir la questionaire et repondre?');\" class='list-group-item' >$row[intitule]</a>
        <button class='btn btn-danger' data-href='admin/supp_ques.php?qid=$row[qid]' data-toggle='modal' data-target='#confirm-delete'>Delete</button>
        <a href='admin/modif_ques.php?qid=$row[qid]' class='btn btn-info' role='button'>Modify</a>
        <a href='admin/result_ques.php?qid=$row[qid]' class='btn btn-success' role='button'>Answers</a>
    </div>";
    }

echo "</div>";

include("supp_popup.php");

?>

    <script>
        $('#confirm-delete').on('show.bs.modal', function (e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>

    <?php

echo "</div>";
echo "<div style='text-align:center'>
        <button class='btn btn-primary' data-toggle='modal' data-target='#add_questionaire'>
            New
        </button>
</div>";

        include("admin/addq_popup.php");
?>
        <script>
            $('#save').click(function () {
                $name = $("input[name='nom_ques']").val();
                $url = 'admin/add_ques.php?name=' + $name;
                window.open($url);
                //window.location.replace($url);
                //window.close();
                //window.open ('YourNewPage.htm','_self',false)
            });
        </script>