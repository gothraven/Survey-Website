<?php

                echo"<div>
                        <h4 style='text-align:center'> I'm an ADMIN</h4>
                    </div>";;
                   echo"<div class='well'>
                            <div class='list-group'>";
                            $db = new PDO($dsn,$username,$password);
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                        
                            $SQL = "SELECT qid,intitule FROM questionnaires";
                            $res = $db->query($SQL);
                        
                            foreach($res as $row){
                                echo "<div class='list-group'>
                                        <a href='supp_ques.php?qid=$row[qid]' class='list-group-item'>$row[intitule]</a>
                                        <a href='$row[qid]' class='btn btn-danger' data-toggle='modal' data-target='#mymodal'>Delete</a>
                                        <a href='$row[qid]' class='btn btn-info' role='button'>Modify</a>
                                        <a href='$row[qid]' class='btn btn-success' role='button'>Answers</a>
                                    </div>";
                                }
                        echo "</div>";
        
                    
                    include("admin/supp_ques.php");
                    
                echo "</div>";

                echo "<div style='text-align:center'>
                            <a href='ajouter.php' class='btn btn-primary' role='button'>New</a>
                    </div>";
?>