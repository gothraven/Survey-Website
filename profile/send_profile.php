<?php
require("../auth/EtreAuthentifie.php");

$uid = $idm->getUid();
$SQL = "SELECT nom,prenom FROM users WHERE uid=$uid";
$result = $db->query($SQL);
$row = $result->fetch();
$lname = $row["nom"];
$fname = $row["prenom"];

echo"<center>
        <img src='img/default_profile.png' name='aboutme' width='140' height='140' border='0' class='img-circle'>
        <h3 class='media-heading'>".$lname." ".$fname." <small>Paris</small></h3>
        <hr>
        <span><strong>Skills: </strong></span>
        <span class='label label-warning'>HTML5/CSS</span>
        <span class='label label-info'>Adobe CS 5.5</span>
        <span class='label label-info'>Microsoft Office</span>
        <span class='label label-success'>Windows XP, Vista, 7</span>
    </center>
        <hr>
    <center>
        <p class='text-left'><strong>Bio: </strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
        <br>
    </center>";
?>




