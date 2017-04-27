<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>
        <?= $title??"" ?>
    </title>

    <style>
        .modal-body p {
            word-wrap: break-word;
        }
    </style>
    <?php
    if($title == "Welcome page"){
echo"<style>
        #section1 {
            padding-top: 100px;
            height: 500px;
        }
        
        #section2 {
            padding-top: 100px;
            height: 500px;
        }
        
        #section3 {
            padding-top: 100px;
            height: 500px;
        }
        
        #section4 {
            padding-top: 100px;
            height: 500px;
        }
         
        body {
            position: relative;
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        
        p {
            font-size: 16px;
        }
        
        .margin {
            margin-bottom: 45px;
        }
        
        .bg-1 {
            background-color: #1abc9c;
            color: #ffffff;
        }
        
        .bg-2 {
            background-color: #474e5d;
            color: #ffffff;
        }
        
        .bg-3 {
            background-color: #ffffff;
            color: #555555;
        }
        
        .bg-4 {
            background-color: #2f2f2f;
            color: #fff;
        }
        
        .container-fluid {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        .navbar {
            padding-top: 1px;
            padding-bottom: 1px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 15px;
            letter-spacing: 5px;
        }
        
        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>";
        }
?>

</head>

<body>
    <?php
if($title == "Authentification" || $title == "Ajout de l'utilisateur"){
    
}else if($title == "Welcome page"){
    include("navbarindex.php");
}else{
     include("navbar.php");
}
?>