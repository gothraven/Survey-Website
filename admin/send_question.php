<?php

include("../db_config.php");

if(isset($_POST["cid"])){
        $cid = $_POST["cid"];
        
        $db = new PDO($dsn,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $name;
        $type;
        $SQL = "SELECT `nom`,`type` FROM `champs` WHERE `cid`= $cid";
        $result = $db->query($SQL);
        foreach($result as $row){
        $name = $row['nom'];
        $type = $row['type'];
        }    
    
        if(strcmp($type,"lText")==0){
            echo"<div class='form-group'>
                <label for='text'><h3>$name</h3></label>
                <input class='form-control' id='text' type='text'>
                </div>";
        }else if(strcmp($type,"bText")==0){
             echo"<div class='form-group'>
                <label for='text'><h3>$name</h3></label>
                <textarea class='form-control' rows='3' id='text'></textarea>
                </div>";
        }else if(strcmp($type,"Number")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$name</h3></label>
                <input class='form-control' id='number' type='number'>
                </div>";
        }else if(strcmp($type,"Email")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$name</h3></label>
                <input class='form-control' id='mail' type='mail'>
                </div>";
        }else if(strcmp($type,"Range")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$name</h3></label>
                <input type='range' name='points' min='1' max='10'>
                </div>";
        }else if(strcmp($type,"Date")==0){
             echo"<div class='form-group'>
                <label class='control-label requiredField' for='date'><h3>$name</h3></label>
                <input class='form-control' id='date' name='date' placeholder='MM/DD/YYYY' type='date'/>
                </div>";
        }else if(strcmp($type,"Yes/No")==0){
            echo"<div class='form-group'>
                <label for='focusedInput'><h3>$name</h3></label>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio'>Yes</label>
                </div>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio'>No</label>
                </div>";
                echo"</div>";
        }else{
            $mylist = json_decode($type, true);
                if($mylist != null){
                    echo"<div class='form-group'>
                    <label for='focusedInput'><h3>$name</h3></label>";
                    foreach($mylist as &$value){
                    echo"<div class='radio'>
                    <label class='input-lg'><input type='radio' name='optradio'>$value</label>
                    </div>";
                    }
                    echo"</div>";    
                }
        }
        $db = null;    
}
?>