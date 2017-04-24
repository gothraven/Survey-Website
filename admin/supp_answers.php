<?php

require("../auth/EtreAuthentifie.php");

$title = 'Suppression';
include("../header.php");

if(isset($_GET["cid"])){
    try{
        $cid = $_GET["cid"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $SQL = "DELETE FROM `donnees` WHERE `donnees`.`cid` = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute([$cid]);
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