<?php

require("../auth/EtreAuthentifie.php");

$title = 'Repondre';
include("../header.php");

if(isset($_GET["qid"])){
    echo "tu veut repondre a la questionnaire qid=' ".$_GET["qid"]." ' .";
}
echo "<a href='../home.php'>go back home</a>";
include("../footer.php");

?>