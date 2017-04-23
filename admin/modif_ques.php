<?php

require("../auth/EtreAuthentifie.php");

$title = 'Modifer';
include("../header.php");
?>
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
                echo "<h2 style='text-align:center;'>".$name."</h2>";    
            ?>
        </div>
    </div>

    <div class="container">
        <div class='list-group'>
            <?php
        $SQL = "SELECT * FROM champs WHERE qid = $qid ORDER BY ordre";
        $result = $db->query($SQL);
        
        echo"<div class='jumbotron'>";
        echo"<div class='list-group'>";
            
        foreach($result as $row){
            
            $type = $row{'type'};
            
            if(strcmp($type,"Texte")==0){
                
                echo"</br>
                <form><div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <a href='modif_champ.php?cid=$row[cid]' class ='close' class ='close' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></a>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='text'><h3>$row[nom]</h3></label>
                <textarea class='form-control' rows='3' id='text'></textarea>
                </div></form>";
                
            }else if(strcmp($type,"Nombre")==0){
                
                echo"</br>
                <div class='form-group'>
               <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <a href='modif_champ.php?cid=$row[cid]' class ='close' class ='close' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></a>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='number' type='number'>
                </div>";
                
            }else if(strcmp($type,"Email")==0){
                
                echo"</br>
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <a href='modif_champ.php?cid=$row[cid]' class ='close' class ='close' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></a>
                <a href='mvup_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-up'></i></a>
                <a href='mvdown_champ.php?cid=$row[cid]' class ='close'><i class='glyphicon glyphicon-chevron-down'></i></a>
                <label for='focusedInput'><h3>$row[nom]</h3></label>
                <input class='form-control' id='email' type='email'>
                
                </div>";
                
            }else if(strcmp($type,"Oui/Non")==0){
                
                echo"</br>
                <div class='form-group'>
                <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                <a href='modif_champ.php?cid=$row[cid]' class ='close' class ='close' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></a>
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
                    echo"</br>
                    <div class='form-group'>
                    <a href='supp_champ.php?cid=$row[cid]' class ='close' onClick=\"return confirm('Vous étes sure?');\"><i class='fa fa-trash'></i></a>
                    <a href='modif_champ.php?cid=$row[cid]' class ='close' class ='close' data-toggle='modal' data-target='#modif_data_Modal'><i class='glyphicon glyphicon-cog'></i></a>
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
        echo"</div>";
        echo"</div>";
        ?>
        </div>
    </div>
    <?php
//data-href='add_champ.php?qid=$qid'
echo "<div style='text-align:center'>
<button class='btn btn-primary' data-toggle='modal' data-target='#add_data_Modal'>New</button>
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
                                    $('#loginModal').hide();
                                    location.reload();
                                } else {
                                    alert("Something wrong happned");
                                    $('#loginModal').hide();
                                    location.reload();
                                }

                            }
                        });
                    }
                });
            });
        </script>
        <script>
            /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $(document).ready(function () {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            $('#champ').on("supp_champ", function (event) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                var cid = $('#supp_champ').val();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                window.alert(cid);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            });
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        });
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        */
        </script>
        <?php
echo"</div>"; //end of first div
include("../footer.php");
?>