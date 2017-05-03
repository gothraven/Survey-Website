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
    echo "<form method='post' id='questionnaire_form'>";
    foreach($result as $row){
        if(strcmp($row["type"],"lText")==0){
            echo"<div class='form-group'>
                <label for='text'><h3>$row[nom]</h3></label>
                <input type='text' name='$row[cid]' class='form-control' placeholder='Little Text...' required value=''>
                </div>";
        }else if(strcmp($row["type"],"bText")==0){
            echo"<div class='form-group'>
                <label for='text'><h3>$row[nom]</h3></label>
                <textarea type='text' name='$row[cid]' class='form-control' rows='3' placeholder='Big Text...' required value=''></textarea>
                </div>";
        }else if(strcmp($row["type"],"Number")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='number' name='$row[cid]' class='form-control' placeholder='Number...' required value=''>
                </div>";
        }else if(strcmp($row["type"],"Email")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='email' name='$row[cid]' class='form-control' placeholder='Email...' required value=''>
                </div>";
        }else if(strcmp($row["type"],"Range")==0){
             echo"<div class='form-group'>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='range' name='$row[cid]' min='1' max='10'>
                </div>";
        }else if(strcmp($row["type"],"Date")==0){
             echo"<div class='form-group'>
                <label class='control-label col-sm-2 requiredField' for='date'><h3>$row[nom]</h3></label>
                <input class='form-control' id='date' name='$row[cid]' placeholder='MM/DD/YYYY' type='date'/>
                </div>";
        }else if(strcmp($row["type"],"Yes/No")==0){
            echo"<div class='form-group'>
                    <label for='focusedInput'><h3>$row[nom]</h3></label>
                    <div class='radio'>
                        <label class='input-lg'><input type='radio' name='$row[cid]' value='Yes'>Yes</label>
                    </div>
                    <div class='radio'>
                        <label class='input-lg'><input type='radio' name='$row[cid]' value='No'>No</label>
                    </div>
                </div>";
        }else{
            $mylist = json_decode($row["type"], true);
                if($mylist != null){
                    echo"<div class='form-group'>
                    <label for='focusedInput'><h3>$row[nom]</h3></label>";
                    foreach($mylist as &$value){  
                    echo"<div class='radio'>
                    <label class='input-lg'><input type='radio' name='$row[cid]' value='$value'>$value</label>
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