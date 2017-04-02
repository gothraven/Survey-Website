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
                echo"<div>
                        <h4 style='text-align:center'> I'm a USER </h4>
                    </div>";;
                   //j'explique les etape de travail
                echo"<ul>
                    <li>on ouvre la base de donner</li>
                    <li>SELECT intitule, qid FROM questionnaires</li>
                    <li> on garde le 'qid' pour bech ki y'clicker l'utilisateur yroh la page li fiha l'questionaire li khayro</li>
                    <li>n'imprimiw avec une strecture de list div kima li rani mdayerha dorka</li>
                    </ul>";
                   //un exemple
                echo"<div class='well'>
                        <div class='list-group'>
                            <a href='#qid' class='list-group-item'>Questionaire 1</a>
                            <a href='#qid' class='list-group-item'>Questionaire 2</a>
                            <a href='#qid' class='list-group-item'>Questionaire 3</a>
                        </div>
                    </div>";
               }else{
                   echo"<div>
                        <h4 style='text-align:center'> I'm an ADMIN</h4>
                    </div>";;
                   //j'explique les étapes de travail
                   echo"<ul>
                    <li>on ouvre la base de donner</li>
                    <li>SELECT intitule, qid FROM questionnaires WHERE uid = idm->getUid()</li>
                    <li> l'qid ta3 chaque questionaire neste3mlouh fi 'modification' 'suppression' 'voir les reponses'</li>
                    <li>dork ndir la strecture basic ta3 chaque questionaire</li>
                    </ul>";
                   //un exemple
                   echo"<div class='well'>
                    <div class='list-group'>
                        <div class='list-group'>
                            <a href='#qid' class='list-group-item'>Questionaire 1</a>
                            <a href='#' class='btn btn-danger' role='button'>Delete</a>
                            <a href='#' class='btn btn-info' role='button'>Modify</a>
                            <a href='#' class='btn btn-success' role='button'>Answers</a>
                        </div>
                        <div class='list-group'>
                            <a href='#qid' class='list-group-item'>Questionaire 1</a>
                            <a href='#' class='btn btn-danger' role='button'>Delete</a>
                            <a href='#' class='btn btn-info' role='button'>Modify</a>
                            <a href='#' class='btn btn-success' role='button'>Answers</a>
                        </div>
                        <div class='list-group'>
                            <a href='#qid' class='list-group-item'>Questionaire 1</a>
                            <a href='#' class='btn btn-danger' role='button'>Delete</a>
                            <a href='#' class='btn btn-info' role='button'>Modify</a>
                            <a href='#' class='btn btn-success' role='button'>Answers</a>
                        </div>
                    </div>
                    <div style='text-align:center'>
                        <a href='#' class='btn btn-primary' role='button'>New</a>
                    </div>
                </div>";
               }
            ?>
        </div>
        <?php
include("footer.php");