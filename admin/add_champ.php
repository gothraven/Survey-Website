<?php

require("../auth/EtreAuthentifie.php");

if(!empty($_POST)){
/*$hostname = "localhost";
$dbname = "projet_db";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$dbname;charset=utf8";
*/
        $name = $_POST["nom_champ"];
        $type = $_POST["type"];
        $qid = $_POST["qid"];;
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $SQL = "SELECT MAX(ordre) FROM `champs` WHERE qid=$qid";
        $result = $db->query($SQL);
        $order = $result->fetchColumn(0); 
        $order++;
        $SQL = "INSERT INTO `champs` (`cid`, `qid`, `nom`, `type`, `ordre`) VALUES (NULL,?,?,?,?)";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($qid,$name,$type,$order));
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }
        
}

?>