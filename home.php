<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
?>
    <div class="btn-group btn-group-justified" -->
        <a href="#" class="btn btn-primary">Check your profile</a>
        <a href="<?= $pathFor['logout'] ?>" class="btn btn-danger">Logout</a>
    </div>

    <?php
        echo "<h3 class='well' style='text-align:center'> Hello ".$idm->getIdentity().". Your uid is: ".$idm->getUid().". Your role is: ".$idm->getRole()."</h3>";
    ?>
        <div class="well">
            <?php
               if($idm->getRole() == "user"){
                
                    include("user/user.php");   
                   
               }else if($idm->getRole() == "admin"){
                   
                   include("admin/admin.php");
               
               }
            ?>
        </div>
        <?php
include("footer.php");