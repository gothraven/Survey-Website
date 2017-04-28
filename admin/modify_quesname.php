<?php

include("../db_config.php");

if(!empty($_POST)){
        $name = $_POST["nom_ques"];
        $qid = $_POST["qid"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $SQL = "UPDATE `questionnaires` SET `intitule` = ? WHERE `questionnaires`.`qid` = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($name,$qid));
    
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }
        $db = null;
}

?>