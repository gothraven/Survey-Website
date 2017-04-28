<?php

include("../db_config.php");

if(isset($_POST["qid"])){
        $qid = $_POST["qid"];
        
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $name;
        $type;
        $SQL = "SELECT intitule FROM questionnaires WHERE qid=$qid";
        $result = $db->query($SQL);
        $name = $result->fetchColumn(0);
        
        echo"$name";
        
        $db = null;
}
?>