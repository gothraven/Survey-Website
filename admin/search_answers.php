<?php

include("../db_config.php");

if(isset($_POST["reference"])){
    $reference = $_POST["reference"];
    if(strlen($reference) != 20){
        echo "exit_failure";
    }else{
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $SQL = "SELECT `sid` FROM `saisie` WHERE `reference` LIKE '$reference'";
        $result = $db->query($SQL);
        if(!$result){
            echo "exit_failure";   
        }else{
            $sid = $result->fetchColumn(0);
            $SQL = "SELECT `cid`,`valeur` FROM `donnees` WHERE `sid` = $sid";
            $result = $db->query($SQL);
            if(!$result){
                echo "exit_failure";
            }else{    
                foreach($result as $row){
                    $cid = $row["cid"];
                    $SQL = "SELECT `nom` FROM `champs` WHERE `cid` = $cid";
                    $res = $db->query($SQL);
                    $nom = $res->fetchColumn(0);
                    echo"<hr>
                    <p>Question : $nom</p>
                    <p>Answer : $row[valeur]</p>
                    <hr>";
                }
            }     
        }
    }    
}else{
    echo "exit_failure";
}

?>
