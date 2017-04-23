<?php

include("../db_config.php");

if(isset($_GET["cid"])){
        $cid = $_GET["cid"];
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $SQL = "DELETE FROM `champs` WHERE cid = ?";
        $set = $db->prepare($SQL);
        $result = $set->execute([$cid]);
        if(!$result){
            echo "exit_failure";
        }else{ 
            echo "exit_success";
        }
        
        $db = null;
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}
echo "<a href='../home.php'>go back home</a>";
include("../footer.php");
?>