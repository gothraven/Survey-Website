<?php
$title="Authentification";
include("header.php");

echo "<p class=\"error\">".($error??"")."</p>";
?>
    <style>
    body {
            #background-color: #484848;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            color: #000000;
            text-align: center;
            #font-family: "SIMPSON";
        }
        
        form {
            padding-top: 200px;
            width: 300px;
            margin: 0 auto;
        }
    }
    </style>
    <div class="row">
        <div class="col-md-4"></div>
        <div class='container col-sm-4'>
            <!--div class="well"-->
            <form class='form-horizontal' method="post">
                <h2 style="text-align:center;">Authentifiez-vous</h2>
                <div class="form-group">
                    <label for="inputNom" class="control-label col-sm-4">Login</label>
                    <div class="col-sm-8">
                        <input type="text" name="login" size="20" class="form-control" id="inputLogin" required placeholder="User Name" required value="<?= $data['login']??'' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMDP" class="control-label col-sm-4">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" size="20" class="form-control" required id="inputMDP" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <span class="pull-right"><a href="<?= $pathFor['adduser'] ?>">Sign up</a></span>
                    </div>
                </div>
            </form>
            <!--/div-->
        </div>
        <div class="col-md-4"></div>
    </div>
    <?php

include("footer.php");