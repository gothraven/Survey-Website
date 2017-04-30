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
        $SQL1 = "DELETE FROM `questionnaires` WHERE qid = ?";
        $SQL2 = "DELETE FROM `champs` WHERE qid = ?";
        $set = $db->prepare($SQL1);
        $result = $set->execute([$qid]);
        $set = $db->prepare($SQL2);
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
echo "<a href='../home.php'>go back home</a>";
include("../footer.php");
?>
