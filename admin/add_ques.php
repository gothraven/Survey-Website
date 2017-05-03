<?php

require("../auth/EtreAuthentifie.php");

$title = 'Ajouter';
include("../header.php");

if(isset($_GET["name"])){
    try{
        $uid = $idm->getUid();
        $name = $_GET["name"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $SQL = "INSERT INTO `questionnaires` (`qid`, `intitule`, `uid`) VALUES (NULL, ?, ?)";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($name,$uid));
        $qid = $db->lastInsertId();
        
        if(!$result){
            echo "<p>Erreur de ajout<p>\n";
        }else{ 
            echo "<p>On a bien creer votre questionaire</p>";
        }
        $url="/Ask-Me/admin/modif_ques.php?qid=".$qid;
        $db = null;
        redirect($url);
        
    }catch(PDOException $e){
        echo "Erreur SQL:".$e->getMessage();
    }
    
}
echo "<a href='../home.php'>go back home</a>";
include("../footer.php");

?>