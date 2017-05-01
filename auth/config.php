<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'uid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/website/login.php",
    "logout" => "/website/logout.php",
    "adduser" => "/website/adduser.php",
    "root"   => "/website/",
    "home" => "/website/home.php",
    "profile"=> "/website/profile_page.php",
];

const SKEY = '_Redirect';