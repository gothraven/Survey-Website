<?php
$title="Authentification";
include("header.php");

echo "<p class=\"error\">".($error??"")."</p>";
?>
    <div class="col-md-4"></div>
    <div class='container col-sm-4'>
        <h2>Authentifiez-vous</h2>
        <div class="well">
            <form class='form-horizontal' method="post">
                <div class="form-group">
                    <label for="inputNom" class="control-label col-sm-2">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" size="20" class="form-control" id="inputLogin" required placeholder="User Name" required value="<?= $data['login']??'' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMDP" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" size="20" class="form-control" required id="inputMDP" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <span class="pull-right"><a href="<?= $pathFor['adduser'] ?>">Sign up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
    <?php

include("footer.php");