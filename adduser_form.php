<?php
$title="Ajout de l'utilisateur";
include("header.php");
?>
    <p class="error">
        <?= $error??""?>
    </p>
    <div class="center">
        <h1>Inscription</h1>
        <form method="post">
            <!--legend>Inscription</legend-->
            <table>
                <tr>
                    <td>
                        <label for="inputNom" class="control-label">Last Name</label>
                    </td>
                    <td>
                        <input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom" required value="<?= $data['nom']??" "?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inputPrenom" class="control-label">First Name</label>
                    </td>
                    <td>
                        <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required aria-required="true" value="<?= $data['prenom']??" "?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inputLogin" class="control-label">Login</label>
                    </td>
                    <td>
                        <input type="text" name="login" class="form-control" id="inputLogin" placeholder="login" required value="<?= $data['login']??" "?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inputMDP" class="control-label">Password</label>
                    </td>
                    <td>
                        <input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Mot de passe" required value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inputMDP2" class="control-label">Repeat Password</label>
                    </td>
                    <td>
                        <input type="password" name="mdp2" class="form-control" id="inputMDP" placeholder="Répéter le mot de passe" required value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Role</label>
                    </td>
                    <td>
                        <select name="role" id="role" class="form-control">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">S'enregistrer</button>
            </div>
        </form>
    </div>
    <?php

include("footer.php");