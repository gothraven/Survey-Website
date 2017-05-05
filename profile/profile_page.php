<?php
require("../auth/EtreAuthentifie.php");
$title = "Profile page";
include("../header.php");

?>
   <link rel="stylesheet" href="../css/glow.min.css">
    <div class='container'>
        <center class="jumbotron">
            <a href="#aboutModal" class="glowg" data-toggle="modal" data-target="#profile_modify"><img src="../img/default_profile.png" name="aboutme" width="140" height="140" class="img-circle"></a>
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
                <em>click on your face to edit your informations</em>
                <br/>
        </center>
    </div>


    <?php
include("profile_modify.php");
include("../footer.php");
?>
