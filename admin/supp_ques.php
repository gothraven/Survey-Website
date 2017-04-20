<?php
    if(!isset($_GET["qid"])){
        
        echo "we can't delete yet";
        
    }else if(!isset($_POST["delete"]) && !isset($_POST["cancel"]) ){
        
        echo "we try to delete";
        
        include("admin/supp_popup.php");
        
        
    }else if(isset($_POST["cancel"])){
        
        echo "calceled";
        
    }else{
        
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
?>