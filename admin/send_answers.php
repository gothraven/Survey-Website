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
        if($type === "Yes/No"){
            $total = 0;
            $yes = 0;
            $no = 0;
            foreach($result as $row){
                if($row["valeur"] === "Yes"){
                    $yes++;
                }else if($row["valeur"] === "No"){
                    $no++;
                }
                $total++;
            }
            if($total != 0){
                $yes_percent = ( $yes * 100 ) / $total;
                $no_percent = ( $no * 100 ) / $total;
            }else{
                $yes_percent = $yes;
                $no_percent = $no;
            }
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
            $('#yes-circle').circliful({
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
            $('#no-circle').circliful({
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
        }else if($type === "Range"){
        
        $_10 = 0;
        $_9 = 0;
        $_8 = 0;
        $_7 = 0;
        $_6 = 0;
        $_5 = 0;
        $_4 = 0;
        $_3 = 0;
        $_2 = 0;
        $_1 = 0;
            
        $total = 0;
        foreach($result as $row){
                if($row["valeur"] === "1"){
                    $_1++;
                }else if($row["valeur"] === "2"){
                    $_2++;
                }else if($row["valeur"] === "3"){
                    $_3++;
                }else if($row["valeur"] === "4"){
                    $_4++;
                }else if($row["valeur"] === "5"){
                    $_5++;
                }else if($row["valeur"] === "6"){
                    $_6++;
                }else if($row["valeur"] === "7"){
                    $_7++;
                }else if($row["valeur"] === "8"){
                    $_8++;
                }else if($row["valeur"] === "9"){
                    $_9++;
                }else if($row["valeur"] === "10"){
                    $_10++;
                }
                $total++;
            }
            if($total != 0){
                $_10per = ( $_10 * 100 ) / $total;
                $_9per = ( $_9 * 100 ) / $total;
                $_8per = ( $_8 * 100 ) / $total;
                $_7per = ( $_7 * 100 ) / $total;
                $_6per = ( $_6 * 100 ) / $total;
                $_5per = ( $_5 * 100 ) / $total;
                $_4per = ( $_4 * 100 ) / $total;
                $_3per = ( $_3 * 100 ) / $total;
                $_2per = ( $_2 * 100 ) / $total;
                $_1per = ( $_1 * 100 ) / $total;
            }else{
                $_10per = $_10;
                $_9per =  $_9;
                $_8per =  $_8;
                $_7per =  $_7;
                $_6per =  $_6;
                $_5per =  $_5;
                $_4per =  $_4;
                $_3per =  $_3;
                $_2per =  $_2;
                $_1per =  $_1;
            }
        echo"<div class='row'>
        <div class='col-xs-3'>
            <div id='1per' data-percent='$_1per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='2per' data-percent='$_2per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='3per' data-percent='$_3per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='4per' data-percent='$_4per'></div>
        </div>
    </div>
    <div class='row'>
         <div class='col-xs-3'>
            <div id='5per' data-percent='$_5per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='6per' data-percent='$_6per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='7per' data-percent='$_7per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='8per' data-percent='$_8per'></div>
        </div>
    </div>
    <div class='row'>
         <div class='col-xs-3'>
        </div>
        <div class='col-xs-3'>
            <div id='9per' data-percent='$_9per'></div>
        </div>
        <div class='col-xs-3'>
            <div id='10per' data-percent='$_10per'></div>
        </div>
        <div class='col-xs-3'>
        </div>
    </div>";
        echo"<script>
            $('#1per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#db345d',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '1',
                textBelow: true
            });
            $('#2per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#db34b1',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '2',
                textBelow: true
            });
            $('#3per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#9a34db',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '3',
                textBelow: true
            });
            $('#4per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#5534db',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '4',
                textBelow: true
            });
            $('#5per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#346bdb',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '5',
                textBelow: true
            });
            $('#6per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#34b9db',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '6',
                textBelow: true
            });
            $('#7per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#34dbab',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '7',
                textBelow: true
            });
            $('#8per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#d8db34',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '8',
                textBelow: true
            });
            $('#9per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#bcdb34',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '9',
                textBelow: true
            });
            $('#10per').circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 5,
                backgroundColor: 'none',
                foregroundColor: '#34db36',
                fillColor: '#eee',
                iconColor: '#DB345D',
                iconPosition: 'middle',
                text: '10',
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
