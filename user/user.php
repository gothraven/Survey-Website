<?php

 echo"<div>
                        <h4 style='text-align:center'> I'm a USER </h4>
                    </div>";;
                   //j'explique les etape de travail
                echo"<ul>
                    <li>on ouvre la base de donner</li>
                    <li>SELECT intitule, qid FROM questionnaires</li>
                    <li> on garde le 'qid' pour bech ki y'clicker l'utilisateur yroh la page li fiha l'questionaire li khayro</li>
                    <li>n'imprimiw avec une strecture de list div kima li rani mdayerha dorka</li>
                    </ul>";
                   
                echo"<div class='well'>
                        <div class='list-group'>";
                        
                        $db = new PDO($dsn,$username,$password);
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                        
                        $SQL = "SELECT qid,intitule FROM questionnaires";
                        $res = $db->query($SQL); 
                        foreach($res as $row){
                            echo "<a href='$row[qid]' class='list-group-item'>$row[intitule]</a>";
                        }
                    echo "</div>
                    </div>";