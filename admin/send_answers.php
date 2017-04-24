<?php

include("../db_config.php");

//if(isset($_POST["cid"])){
        $cid = 51; //$_POST["cid"];
        
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $SQL = "SELECT `type` FROM `champs` WHERE `cid` = $cid";
        $result = $db->query($SQL);
        $type = $result->fetchColumn(0);
        
        $SQL = "SELECT `valeur` FROM `donnees` WHERE `cid`= $cid";
        $result = $db->query($SQL);
    
        foreach($result as $row){
            echo "$type ";
            echo "$row[valeur]";
        }
        
        $db = null;    
//}
?>