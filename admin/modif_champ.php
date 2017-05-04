<?php

include("../db_config.php");

if(!empty($_POST)){

        $name = $_POST["nom_champ"];
        $type = $_POST["type"];
        $cid = $_POST["cid"];
        $list = $_POST["list"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if($type == "List"){
            if($list == ""){
                echo "exit_failure";
            }
            $jlist = json_encode(explode(',',$list));
            $SQL = "UPDATE `champs` SET `nom` = ?, `type` = ? WHERE `champs`.`cid` = ?";
            $set = $db->prepare($SQL);
            $result = $set->execute(array($name,$jlist,$cid));
        }else{
            $SQL = "UPDATE `champs` SET `nom` = ?, `type` = ? WHERE `champs`.`cid` = ?";
            $set = $db->prepare($SQL);
            $result = $set->execute(array($name,$type,$cid));
        }
        
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }
        $db = null;
    
}

?>