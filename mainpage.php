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
    <link rel="stylesheet" type="text/css" href="./scss//mainpage.css">
    <link rel="stylesheet" href="./SCSS/work.css">
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
            <a href="setting.php"><i class="fas fa-cog"></i>  Settings</a> <hr>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div> <br><br>

        <div class="options">
            <div class="selection">

                <div class="find">
                    <span><i class="fas fa-search"></i></span>
                    <input type="search" placeholder="Search work...">
                </div>

                <div class="caption">
                    <p>No matter what you’re envisioning or wanting to build, our product development team has the skill and expertise to bring it to life.</p>
                </div>
                
                <div class="opt">
                    <i class="fas fa-blog"></i>
                    <h1>BLOG</h1>
                    <p>Write down all your travel memories.</p>
                    <a href="write.php">Create blog</a>
                </div>

                <div class="opt">
                    <i class="fas fa-feather"></i>
                    <h1>POEM</h1>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="write.php">Create poem</a>
                </div>

                <div class="opt">
                    <i class="fas fa-book-open"></i>
                    <h1>STORY</h1>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="write.php">Create story</a>
                </div>

                <div class="opt">
                    <i class="far fa-newspaper"></i>
                    <h1>ARTICLE</h1>
                    <p>Lorem ipsum dolor sit amet consectetur.s</p>
                    <a href="write.php">Create article</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>