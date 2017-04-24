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
                $SQL = "SELECT intitule FROM questionnaires WHERE qid=$qid";
                $result = $db->query($SQL);
                $name = $result->fetchColumn(0);
                ?>
                    <button class="close pull-left" data-toggle='modal' data-target='#modifname_ques_Modal'>
                        <h2><b><?=$name;?></b></h2>
                    </button>
                    <?php
    include("modifname_popup.php");
?>
                        <script>
                            $(document).ready(function () {
                                $('#modifques_form').on("submit", function (event) {
                                    event.preventDefault();
                                    if ($('#nom_ques').val() == "") {
                                        alert("Nom de questionaire ne doit pas etre vide");
                                    } else {
                                        $.ajax({
                                            url: "modify_quesname.php",
                                            method: "POST",
                                            data: $('#modifques_form').serialize(),
                                            beforeSend: function () {
                                                $('#modify').val("Modifying");
                                            },
                                            success: function (data) {
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
            
        foreach($result as $row){
            
            $type = $row{'type'};
            
            if(strcmp($type,"Texte")==0){
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='text'><h3>$row[nom]</h3></label>
                <textarea class='form-control' rows='3' id='text'></textarea>
                </div>";
                
            }else if(strcmp($type,"Nombre")==0){
                
                echo"<br />
                <div class='form-group'>
               <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='number' type='number'>
                </div>";
                
            }else if(strcmp($type,"Email")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='email' type='email'>
                
                </div>";
                
            }else if(strcmp($type,"Oui/Non")==0){
                
                echo"<br />
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <button class='close' id='$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></button>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio'>Oui</label>
                </div>";
                echo"<div class='radio'>
                <label class='input-lg'><input type='radio' name='optradio'>Non</label>
                </div>";
                echo"</div>";
                
            }else{
                
                $mylist = json_decode($type, true);
                if($mylist != null){
                    echo"<br />
                    <div class='form-group'>
                    <a href='supp_champ.php?$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                    <button class='close' id='cid=$row[cid]' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></button>
                    <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                    <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
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
<button class='btn btn-primary' data-toggle='modal' data-target='#add_data_Modal'><i class='glyphicon glyphicon-plus'></i></button>
</div>";
include("addc_popup.php");
include("modifc_popup.php");
?>

        <script>
            $(document).ready(function () {
                $('#insert_form').on("submit", function (event) {
                    event.preventDefault();
                    if ($('#nom_champ').val() == "") {
                        alert("Name is required");
                    } else {
                        $.ajax({
                            url: "add_champ.php",
                            method: "POST",
                            data: $('#insert_form').serialize(),
                            beforeSend: function () {
                                $('#insert').val("Inserting");
                            },
                            success: function (data) {
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

            $(document).ready(function () {
                $("button.close").click(function () {
                    var cid = $(this).attr('id');
                    $("[id=cid]").val(cid);
                });
                $('#modif_form').on("submit", function (event) {
                    event.preventDefault();
                    if ($('#nom_champ_modif').val() == "") {
                        alert("Name is required");
                    } else {
                        $.ajax({
                            url: "modif_champ.php",
                            method: "POST",
                            data: $('#modif_form').serialize(),
                            beforeSend: function () {
                                $('#modif').val("Modifying");
                            },
                            success: function (data) {
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