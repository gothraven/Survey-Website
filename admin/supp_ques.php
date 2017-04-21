<?php
    
require("../auth/EtreAuthentifie.php");

$itle = 'Suppression';
include("../header.php");

    if(isset($_GET["qid"])){

        echo "we will delete now";
        /*$db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $SQL = "DELETE FROM `questionnaires` WHERE qid = ?";
        $res = $db->query($SQL); 
        foreach($res as $row){
        
        }
    */
    }
    include("../footer.php");
?>