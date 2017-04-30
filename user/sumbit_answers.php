<?php 
require("../auth/EtreAuthentifie.php");
include("../db_config.php");
include("../refCode.php");

$refCode = RandomString(20);

if(!empty($_POST)){
    
    $SQL = "INSERT INTO `saisie` (`sid`, `reference`) VALUES (NULL,?)";
	$set = $db->prepare($SQL);
    $result = $set->execute(array($refCode));
    $sid = $db->lastInsertId();
    
    $SQL = "INSERT INTO `donnees` (`sid`, `cid`, `valeur`) VALUES (?,?,?)";
    $set = $db->prepare($SQL);
    foreach ($_POST as $key => $value) {
       $result = $set->execute(array($sid,$key,$value));
	}
    
    if(!$result){
        echo "exit_failure";
    }else{
        //echo "thank you for answering here is your referance code : '".$refCode."' you will need it for the future contacts";
        echo "<p>thank you for answering here is your referance code : <b>".$refCode."</b> you will need it for the future contacts</p>";
    }
    
}else{
    echo "exit_failure";
}

?>
