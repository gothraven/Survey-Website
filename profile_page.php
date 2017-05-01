<?php
require("auth/EtreAuthentifie.php");
$title = "Profile page";
include("header.php");

?>
        <div class='container'>
            <center>
                <a href="#aboutModal" data-toggle="modal" data-target="#profile_modify"><img src="img/default_profile.png" name="aboutme" width="140" height="140" class="img-circle"></a>
                 <?php
                $uid = $idm->getUid();
                $SQL = "SELECT nom,prenom FROM users WHERE uid=$uid";
                $result = $db->query($SQL);
                $row = $result->fetch();
                $lname = $row["nom"];
                $fname = $row["prenom"];
                
            echo"<h3>".$lname." ".$fname."</h3>
                <em><b>".$idm->getRole()."</b></em>";
                ?>
                <br/>
                <em>click on your face to edit your informations</em>
            </center>
        </div>
    <?php
include("profile_modify.php");
include("footer.php");
?>
