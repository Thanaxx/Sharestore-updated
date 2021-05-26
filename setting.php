<?php
    
    if(!isset($_SESSION)){
        session_start();
    }

    include_once("./Connection/connection.php");
    $con = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./scss/mainpage.css">
    <link rel="stylesheet" type="text/css" href="./scss/setting.css">
    <link rel="stylesheet" href="./cssFontawesome/all.min.css">
    <title>Document</title>
</head>
<body>

    <div class="main">
            <div class="sidebar">
                <img class="Logo" src="./images/Group 131.svg" alt="">
                <img class="User" src="./images/Group 127 (1).svg" alt="">
                <p class="userfullname">Christel Joy Abordaje</p>
                <p class="username">@thannax</p>

                <a href="mainpage.php"><i class="fas fa-edit"></i> Create</a>
                <a href="works.php"><i class="fas fa-book"></i>  Works</a>
                <a href="draft.php"><i class="far fa-copy"></i> Drafts</a>
                <a href="#"><i class="fas fa-cog"></i>  Settings</a> <hr>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div> <br><br>

            <div class="collapsible">
            
                <div class="options">
                    <button type="button" class="collap">Account <i class="fas fa-plus"></i></button>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at!</p>
                        </div>

                    <button type="button" class="collap">About <i class="fas fa-plus"></i></button>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>

                    <button type="button" class="collap">Contacts <i class="fas fa-plus"></i></button>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusamus, magnam ex quibusdam vitae voluptates quia nam consectetur delectus nostrum pariatur.
                            </p>
                        </div>

                    <button type="button" class="collap">Darkmode <i class="fas fa-plus"></i></button>
                        <div class="content">
                            <input type="checkbox" name="dark" id="darker">Darkmode
                        </div>

                    <button type="button" class="collap">Language <i class="fas fa-plus"></i></button>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusamus, magnam ex quibusdam vitae voluptates quia nam consectetur delectus nostrum pariatur.
                            </p>
                        </div>
                </div>

            </div>
    </div>  

    <script src="./js///settings.js"></script>
</body>
</html>





