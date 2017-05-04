<?php 
require("../auth/EtreAuthentifie.php");
include("../db_config.php");
include("refCode.php");

$refCode = RandomString(20);

if(!empty($_POST)){
    
    $SQL = "INSERT INTO `saisie` (`sid`, `reference`) VALUES (NULL,?)";
	$set = $db->prepare($SQL);
    $result = $set->execute(array($refCode));
    $sid = $db->lastInsertId();
    
    $SQL = "INSERT INTO `donnees` (`sid`, `cid`, `valeur`) VALUES (?,?,?)";
    $set = $db->prepare($SQL);
    foreach ($_POST as $key => $value) {
        if($value != ""){
            $result = $set->execute(array($sid,$key,$value));
        }
	}
    
    if(!$result){
        echo "exit_failure";
    }else{
        echo "<h3><b>Thank youu</b></h3><p>here is your referance code : <b>'".$refCode."'</b> you will need it for the future contacts</p>";
    }
    
}else{
    echo "exit_failure";
}

?>
