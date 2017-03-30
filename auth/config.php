<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'userid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/wesite_projects/trame_auth/login.php",
    "logout" => "/wesite_projects/trame_auth/logout.php",
    "adduser" => "/wesite_projects/trame_auth/adduser.php",
    "root"   => "/wesite_projects/trame_auth/",
];

const SKEY = '_Redirect';