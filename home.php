<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
?>
    <?php
echo"<div class='container'>";
echo "<h3 class='well' style='text-align:center'> Hello ".$idm->getIdentity().". Your uid is: ".$idm->getUid().". Your role is: ".$idm->getRole()."</h3>";
echo"</div>";
?>

        <?php
if($idm->getRole() == "user"){
    
    include("user/user.php");   
    
}else if($idm->getRole() == "admin"){
   
    include("admin/admin.php");
   
}
 ?>

            <?php
include("footer.php");