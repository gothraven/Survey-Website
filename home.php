<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
?>
    <div class='container'>
        <center class="jumbotron">
            <a href="#aboutModal" class="glowg" id="profile"><img src="img/default_profile.png" name="aboutme" width="140" height="140" class="img-circle"></a>
            <?php
                $uid = $idm->getUid();
                $SQL = "SELECT nom,prenom FROM users WHERE uid=$uid";
                $result = $db->query($SQL);
                $row = $result->fetch();
                $lname = $row["nom"];
                $fname = $row["prenom"];
                
            echo"<h1>".$lname." ".$fname."</h1>
                <em><b>".$idm->getRole()."</b></em>";
                ?>
                <br/>
                <em>click on your face to see your informations and your score</em>
        </center>
    </div>
    <br/>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#profile', function() {
                var id = $(this).attr("id");
                $.ajax({
                    url: "profile/send_profile.php",
                    method: "POST",
                    data: {
                        uid: id
                    },
                    success: function(data) {
                        $('#myprofile').html(data);
                        $('#myModal').modal('show');
                    }
                });
            });
        });

    </script>
    <?php
include("profile/profile_popup.php");

if($idm->getRole() == "user"){
    
    include("user/user.php"); 
       
}else if($idm->getRole() == "admin"){
    include("admin/search_modal.php");
    include("admin/admin.php"); 
    ?>
        <script>
            $('#search-form').on('click', '#search', function(event) {
                event.preventDefault();
                if ($("#srch-term").val() == "") {
                    alert("its empty");
                } else {
                    var ref = $("#srch-term").val();
                    $.ajax({
                        url: "admin/search_answers.php",
                        method: "POST",
                        data: {
                            reference : ref
                        },
                        success: function(data) {
                            $('#search-form')[0].reset();
                            if (data == 'exit_failure') {
                                alert("you've written a wrong reference code, or it doesn't exist anymore");
                                location.reload();
                            } else {
                                $('#answers_here').html(data);
                                $('#search_Modal').modal('show');
                            }
                        }
                    });
                }

            });
        </script>
 <?php
}
 ?>

        <?php
include("footer.php");
