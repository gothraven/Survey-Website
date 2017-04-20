<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'userid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/website/login.php",
    "logout" => "/website/logout.php",
    "adduser" => "/website/adduser.php",
    "root"   => "/website/",
    "admin" => "/website/admin/admin.php",
];

const SKEY = '_Redirect';