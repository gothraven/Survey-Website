<?php

require("../auth/EtreAuthentifie.php");

$title = 'Suppression';
include("../header.php");

if(isset($_GET["qid"])){
    try{
        $qid = $_GET["qid"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        /*
        $SQL = "SELECT cid FROM champs WHERE qid = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute(array($qid));
        foreach($result as $key => $cid){
            $SQL1 = "SELECT sid FROM donnees WHERE cid = ?";
            $set = $db->prepare($SQL1);
            $res = $set->execute(array($cid));
            foreach($res as $id => $sid){
                $SQL2 = "DELETE FROM saisie WHERE sid = ?";
                $set = $db->prepare($SQL2);
                $del = $set->execute(array($sid));
            }
        }
        */
        
        $SQL = "DELETE FROM `questionnaires` WHERE qid = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute([$qid]);
        
        if(!$result){
            echo "<p>Erreur de suppression<p>\n";
        }else{ 
            echo "<p>La suppression a été effectuée</p>";
        }
        $db = null;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }catch(PDOException $e){
        echo "Erreur SQL:".$e->getMessage();
    }
    
}
include("../footer.php");
?>
