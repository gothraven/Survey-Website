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
                height: 700px;
            }
            
            #section1 h3 {
                font-size: 40px;
                letter-spacing: 10px;
            }
            
            #section1 p {
                font-size: 20px;
                letter-spacing: 2px;
            }
            
            #section2 {
                padding-top: 80px;
                height: 500px;
            }
            
            #section3 {
                padding-top: 100px;
                height: 700px;
            }
            
            #section4 {
                padding-top: 10px;
                height: 300px;
            }
            
            #section5 {
                padding-top: 60px;
                height: 500px;
            }
            
            #section5 h2 {
                font-size: 35px;
                letter-spacing: 5px;
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
            
            .bg-2 {
                background-color: #1abc9c;
                color: #ffffff;
            }
            
            .bg-1 {
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
            
            .carousel-control.right,
            .carousel-control.left {
                background-image: none;
                color: #f4511e;
            }
            
            .carousel-indicators li {
                border-color: #f4511e;
            }
            
            .carousel-indicators li.active {
                background-color: #f4511e;
            }
            
            .item h4 {
                font-size: 19px;
                line-height: 1.375em;
                font-weight: 400;
                font-style: italic;
                margin: 70px 0;
            }
            
            .item span {
                font-style: normal;
            }
            
            .slideanim {
                visibility: hidden;
            }
            
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            
            @-webkit-keyframes slide {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0%);
                }
            }
            
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                }
                .btn-lg {
                    width: 100%;
                    margin-bottom: 35px;
                }
            }
            
            @media screen and (max-width: 480px) {
                .logo {
                    font-size: 150px;
                }
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