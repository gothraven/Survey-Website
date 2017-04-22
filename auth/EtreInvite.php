<?php

require("loader.php");


if ($idm->hasIdentity()) {
    //http_response_code(403);
    $auth->clear();
    $idm->clear();
    redirect("adduser.php");
    //echo "Error: User already authenticated.";
    exit();
};