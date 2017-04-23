<?php

include("../db_config.php");

if(isset($_GET["cid"])){
    
        $cid = $_GET["cid"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $SQL = "SELECT qid FROM `champs` WHERE cid=$cid";
        $result = $db->query($SQL);
        $qid = $result->fetchColumn(0);
        
        $SQL = "SELECT MIN(ordre) FROM `champs` WHERE qid=$qid";
        $result = $db->query($SQL);
        $ordre = $result->fetchColumn(0); 
        
        if($ordre != 1){
            $ordre--;
        }
    
        $SQL = "UPDATE `champs` SET `ordre` = ? WHERE `champs`.`cid` = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($ordre,$cid));
    
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }
        
        $db = null;
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

echo "<a href='../home.php'>go back home</a>";
include("../footer.php");

?>