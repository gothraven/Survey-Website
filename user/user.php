<?php
echo"<div class='container'>";
echo"<div class='well'>
<div class='list-group'>";
    
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $SQL = "SELECT qid,intitule FROM questionnaires";
    $res = $db->query($SQL); 
    foreach($res as $row){
        echo "<a href='user/repond_ques.php?qid=$row[qid]' class='list-group-item'><h4><b>$row[intitule]</b></h4></a>";
    }

echo "</div>
</div>";
echo "</div>";