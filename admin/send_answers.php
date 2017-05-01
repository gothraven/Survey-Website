<?php

include("../db_config.php");

if(isset($_POST["cid"])){
        $cid = $_POST["cid"];
        
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $SQL = "SELECT `type` FROM `champs` WHERE `cid` = $cid";
        $result = $db->query($SQL);
        $type = $result->fetchColumn(0);
        
        $SQL = "SELECT `valeur` FROM `donnees` WHERE `cid`= $cid";
        $result = $db->query($SQL);
        if($type === "Oui/Non"){
            $total = 0;
            $yes = 0;
            $no = 0;
            foreach($result as $row){
                if($row["valeur"] === "Oui"){
                    $yes++;
                }else if($row["valeur"] === "Non"){
                    $no++;
                }
                $total++;
            }
            $yes_percent = ( $yes * 100 ) / $total;
            $no_percent = ( $no * 100 ) / $total;
            echo"<div class='row'>
                <div class='col-xs-2'>
                </div>
                <div class='col-xs-4'>
                    <div id='yes-circle' data-percent='$yes_percent' ></div>
                </div>
                <div class='col-xs-4'>
                    <div id='no-circle' data-percent='$no_percent' ></div>
                </div>
                <div class='col-xs-2'>
                </div>
            </div>
            <script>
            $('.modal-body #yes-circle').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#34db36',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: 'Yes',
                textBelow: true
            });
            $('.modal-body #no-circle').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#db345d',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: 'No',
                textBelow: true
            });

        </script>";
        }else{
        
            foreach($result as $row){
                echo "<hr><p>$row[valeur]</p><hr>";
            }
        
        }
        
        $db = null;    
}
?>