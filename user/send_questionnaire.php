<?php

include("../db_config.php");

 if(isset($_POST["qid"])){
    $qid = $_POST["qid"];
        
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $name;
    
    $SQL = "SELECT * FROM champs WHERE qid=$qid ORDER BY ordre";
    $result = $db->query($SQL);
    echo "<form method='post' id='modifques_form'>";
    foreach($result as $row){
        if(strcmp($row["type"],"Texte")==0){
            echo"<div class='form-group'>
                <label for='text'><h3>$row[nom]</h3></label>
                <textarea type='text' name='text' class='form-control' rows='3' id='$row[cid]' placeholder='Text...' required value=''></textarea>
                </div>";
        }else if(strcmp($row["type"],"Nombre")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='number' name='number' class='form-control' id='$row[cid]' placeholder='Number...' required value=''>
                </div>";
        }else if(strcmp($row["type"],"Email")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='email' name='email' class='form-control' id='$row[cid]' placeholder='Email...' required value=''>
                </div>";
        }else if(strcmp($row["type"],"Oui/Non")==0){
            echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio' id='$row[cid]' value='Oui'>Oui</label>
                </div>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio' id='$row[cid]' value='Non'>Non</label>
                </div>";
                echo"</div>";
        }else{
            $mylist = json_decode($row["type"], true);
                if($mylist != null){
                    echo"<div class='form-group'>
                    <label for='focusedInput'><h3>$row[nom]</h3></label>";
                    foreach($mylist as &$value){  
                    echo"<div class='radio'>
                    <label class='input-lg'><input type='radio' name='optradio' id='$row[cid]' value='$value'>$value</label>
                    </div>";
                    }
                    echo"</div>";    
                }
        }
        
    }
    echo "<input type='submit' name='sumbit' id='sumbit' value='Sumbit' class='btn btn-success' />";
    echo "</form>";
     
     $db = null;
 }

?>