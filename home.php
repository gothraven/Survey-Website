<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
?>
    <div class='container'>
            <center>
                <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="img/default_profile.png" name="aboutme" width="140" height="140" class="img-circle"></a>
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
                <em>click on your face to see your informations and your score</em>
            </center>
    </div>
    <br/>

    <?php
include("profile_popup.php");

if($idm->getRole() == "user"){
    
    include("user/user.php");   
    
}else if($idm->getRole() == "admin"){
   
    include("admin/admin.php");
   
}
 ?>

        <?php
include("footer.php");
