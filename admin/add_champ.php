<?php
/*
if(!empty($_POST)){
    echo $_POST["type"];
}else{ 
    echo "exit_failure";
}
*/
require("../auth/EtreAuthentifie.php");

$title = 'Ajouter';
include("../header.php");

if(!empty($_POST)){
    $name = $_POST["nom_champ"];
    $type = $_POST["type"];
   // $qid = 8;
    try{
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        /*$SQL = "SELECT MAX(ordre) FROM `champs` WHERE qid=$_POST[qid]";
        $result = $db->query($SQL);
        $order = $result->fetchColumn(0); 
        $order++;*/
        $SQL = "INSERT INTO `champs` (`cid`, `qid`, `nom`, `type`, `ordre`) VALUES (NULL, 8,?,?, 6)";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($name,$type));
        //$result = $set->execute([$name][$type]);
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }    
    }catch(PDOException $e){
        echo "Erreur SQL:".$e->getMessage();
    }
}
include("../footer.php");
/*
$hostname = "localhost";
$dbname = "projet_db";
$username = "root";
$password = "";

$connect = mysqli_connect("localhost","projet_db",$password, $dbname);
if(!empty($_POST)){
    $name = mysqli_real_escape_string($connect, $_POST["nom_champ"]);
    $type = mysqli_real_escape_string($connect, $_POST["type"]);
    $SQL = "INSERT INTO `champs` (`cid`, `qid`, `nom`, `type`, `ordre`) VALUES (NULL,8,$name,$type,6)";
    if(mysqli_query($connect, $SQL)){
        echo "exit_success";
    }else{
        echo "exit_failure";
    }
}
*/
?>