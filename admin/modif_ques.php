<?php

require("../auth/EtreAuthentifie.php");

$title = 'Modifer';
include("../header.php");
?>
    <div class="container">
        <div class="well">
            <div class="container">
                <?php
                $db = new PDO($dsn,$username,$password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $qid = $_GET["qid"];
                
                //security check
                $uid = $idm->getUid();
                $SQL = "SELECT uid FROM questionnaires WHERE qid=$qid";
                $result = $db->query($SQL);
                $id = $result->fetchColumn(0);
                if($id != $uid)redirect($pathFor['home']);
                
                $SQL = "SELECT intitule FROM questionnaires WHERE qid=$qid";
                $result = $db->query($SQL);
                $name = $result->fetchColumn(0);
                ?>
                    <button class="close pull-left questionnaire glowgr" data-toggle='modal' data-target='#modifname_ques_Modal'>
                        <h2><b id="ques_name"><?=$name;?></b></h2>
                    </button>
                    <?php
    include("modifname_popup.php");
?>

                        <script>
                            $(document).ready(function() {
                                var name = $('#ques_name').text();
                                $('#nom_ques').val(name);
                                $('#modifques_form').on("submit", function(event) {
                                    event.preventDefault();
                                    if ($('#nom_ques').val() == "") {
                                        alert("Nom de questionaire ne doit pas etre vide");
                                    } else {
                                        $.ajax({
                                            url: "modify_quesname.php",
                                            method: "POST",
                                            data: $('#modifques_form').serialize(),
                                            beforeSend: function() {
                                                $('#modify').val("Modifying...");
                                            },
                                            success: function(data) {
                                                $('#modifques_form')[0].reset();
                                                $('#modifname_ques_Modal').modal('hide');
                                                if (data == 'exit_success') {
                                                    location.reload();
                                                } else {
                                                    alert("Something wrong happned");
                                                    location.reload();
                                                }
                                            }
                                        });
                                    }
                                });
                            });

                        </script>
            </div>
        </div>
    </div>
    <div class="container">
        <div class='list-group'>
            <div class='jumbotron'>
                <div class='list-group'>
                    <?php
        $SQL = "SELECT * FROM champs WHERE qid = $qid ORDER BY ordre";
        $result = $db->query($SQL);
        $number_of_rows = $result->rowCount();
        if(!$number_of_rows){
            echo "<p class='close pull-left'>
                    Your questions will be here ...
                </p>";   
        }
        foreach($result as $row){
            
            $type = $row{'type'};
            
            if(strcmp($type,"lText")==0){
               
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='text'><h3>$row[nom]</h3></label>
                <input class='form-control' id='text' type='text'>
                </div>";
                
            }else if(strcmp($type,"bText")==0){
               
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='text'><h3>$row[nom]</h3></label>
                <textarea class='form-control' rows='3' id='text'></textarea>
                </div>";
                
            }else if(strcmp($type,"Number")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='number' type='number'>
                </div>";
            
            }else if(strcmp($type,"Email")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='email' type='email'>
                
                </div>";
                
            }else if(strcmp($type,"Range")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input type='range' name='points' min='0' max='10'>
                
                </div>";
                
            }else if(strcmp($type,"Date")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label class='control-label requiredField' for='date'><h3>$row[nom]</h3></label>
                <input class='form-control' id='date' name='date' placeholder='MM/DD/YYYY' type='date'/>
                
                </div>";
                
            }else if(strcmp($type,"Yes/No")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>";
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
                    echo"<br />
                    <div class='form-group'>
                    <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash glowr'></i></a>
                    <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog glowg'></i></button>
                    <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up glowb'></i></a>
                    <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down glowb'></i></a>
                    <label for='focusedInput'><h3>$row[nom]</h3></label>";
                
                    foreach($mylist as &$value){
                    echo"<div class='radio'>
                    <label class='input-lg'><input type='radio' name='optradio'>$value</label>
                    </div>";
                    }
                    echo"</div>";    
                } 
            }
        }
        
        ?>
                </div>
            </div>
        </div>
    </div>

    <?php
echo "<div style='text-align:center'>
<button class='btn btn-primary glowg' data-toggle='modal' data-target='#add_data_Modal'><i class='glyphicon glyphicon-plus'></i></button>
</div>";
include("addc_popup.php");
include("modifc_popup.php");
?>

        <script>
            $(document).ready(function() {
                $("#type").click(function() {
                    if ($('#type').val() == "List") {
                        $("#list").attr("type","text");
                    }else{
                        $("#list").attr("type","hidden");
                        $("#list").val("");
                    }
                });

                $('#insert_form').on("submit", function(event) {
                    event.preventDefault();
                    if ($('#nom_champ').val() == "") {
                        alert("Name is required");
                    } else if($('#type').val() == "List" && $("#list").val() == ""){
                        alert("list shouldn't be empty");      
                    }else{
                        $.ajax({
                            url: "add_champ.php",
                            method: "POST",
                            data: $('#insert_form').serialize(),
                            beforeSend: function() {
                                $('#insert').val("Inserting");
                            },
                            success: function(data) {
                                $('#insert_form')[0].reset();
                                $('#add_data_Modal').modal('hide');
                                if (data == 'exit_success') {
                                    location.reload();
                                } else {
                                    alert("Something wrong happned");
                                    location.reload();
                                }
                            }
                        });
                    }
                });
            });

            $(document).ready(function() {
                $("button.close").click(function() {
                    var cid = $(this).attr('id');
                    $("[id=cid]").val(cid);
                });
                $("#type-modif").click(function() {
                    if ($('#type-modif').val() == "List") {
                        $("#list-modif").attr("type","text");
                    }else{
                        $("#list-modif").attr("type","hidden");
                        $("#list-modif").val("");
                    }
                });
                $('#modif_form').on("submit", function(event) {
                    event.preventDefault();
                    if ($('#nom_champ_modif').val() == "") {
                        alert("Name is required");
                    } else if($('#type-modif').val() == "List" && $("#list-modif").val() == ""){
                        alert("list shouldn't be empty");      
                    } else {
                        $.ajax({
                            url: "modif_champ.php",
                            method: "POST",
                            data: $('#modif_form').serialize(),
                            beforeSend: function() {
                                $('#modif').val("Modifying");
                            },
                            success: function(data) {
                                $('#modif_form')[0].reset();
                                $('#modif_data_Modal').modal('hide');
                                if (data == 'exit_success') {
                                    location.reload();
                                } else {
                                    alert("Something wrong happned");
                                    location.reload();
                                }
                            }
                        });
                    }
                });
            });

        </script>

        <?php
include("../footer.php");
?>
