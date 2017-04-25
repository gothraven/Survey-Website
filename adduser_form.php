<?php
$title="Ajout de l'utilisateur";
include("header.php");
?>
    <p class="error">
        <?= $error??""?>
    </p>
    <div class="col-sm-3">
    </div>
    <div class="container col-sm-6">
        <h1>Inscription</h1>
        <div class="well">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="inputNom" class="control-label col-sm-2">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" class="form-control" id="inputNom" placeholder="ex: Mark" required value="<?= $data['nom']??" "?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPrenom" class="control-label col-sm-2">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="ex: Jeff" required aria-required="true" value="<?= $data['prenom']??" "?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLogin" class="control-label col-sm-2">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" class="form-control" id="inputLogin" placeholder="ex: survy2017" required value="<?= $data['login']??" "?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMDP" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Password" required value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMDP2" class="control-label col-sm-2">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="mdp2" class="form-control" id="inputMDP" placeholder="Repeate your password" required value="">
                    </div>
                </div>
                <div class="form-group">

                    <label for="role" class="control-label col-sm-2">Select Role</label>
                    <div class="col-sm-10">
                        <select name="role" id="role" class="form-control">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">S'enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-3">
    </div>
    <?php

include("footer.php");