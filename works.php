<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include_once("./Connection/connection.php");
    $con = connect();

    // get the text data fom the database to be displaed in the table
    $sql = "SELECT * FROM `text` ORDER BY id DESC";
    $write = $con->query($sql) or die($con->error);
    $all = $write->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./scss///mainpage.css">
    <link rel="stylesheet" type="text/css" href="./scss/work.css">
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

        <div class="savedWorks">
            <div class="listWork">
                <?php do{ ?>
                    <div class="works">
                        <h3><?php echo $all['title']; ?></h3>
                        <p>05MAY2021</p>
                        <button><a href="openwork.php?id=<?php echo $all['id']; ?>"><i class="fas fa-edit"></i></a></button>
                    </div>
                <?php } while($all = $write->fetch_assoc()) ?>
            </div>
        </div>
</div>  





</body>
</html>