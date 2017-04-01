<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
?>
    <div class="btn-group btn-group-justified">
        <!--a href="#" class="btn btn-primary">Info</a-->
        <a href="#" class="btn btn-primary">Check your answers</a>
        <a href="<?= $pathFor['logout'] ?>" class="btn btn-danger">Logout</a>
    </div>

    <?php
echo "<p class ='well' style='text-align:center'>Hello " . $idm->getIdentity().". Your uid is: ". $idm->getUid() .". Your role is: ".$idm->getRole()."</p>";
?>
        <div class="well">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="list-group">
                        <a href="#" class="list-group-item">First item</a>
                        <a href="#" class="list-group-item">Second item</a>
                        <a href="#" class="list-group-item">Third item</a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class='well well-sm'>
            <ul class="pager">
                <li class="previous"><a href="index.php">Previous</a></li>
                <li class="next"><a href="home.php">Next</a></li>
            </ul>
        </div>
        <?php
include("footer.php");