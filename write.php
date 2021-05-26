<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include_once("./Connection/connection.php");
    $con = connect();

    // Insert text to the db
    if(isset($_POST['save'])){

        $Title = $_POST['title'];
        $Body = $_POST['body'];

        $sql = "INSERT INTO `text`(`title`, `body`) VALUES('$Title', '$Body')";

        $con -> query($sql) or die($con->error);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./SCSS///write.css">
    <link rel="stylesheet" href="./cssFontawesome/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="create">
        <nav>
            <i id="set" class="fas fa-2x fa-ellipsis-h"></i>
        </nav>

        <form action="" method="post">
            <input type="text" name="title" id="title" placeholder="Enter title"> <br>
            <textarea name="body" id="body" cols="100" rows="30" placeholder="Start writing..."></textarea><br>

            <div class="modalWrite">
                <ul>
                    <li><button type="submit" name="save">Save as work</button></li>
                    <li><a href="#">Save as draft</a></li>
                    <li><a href="mainpage.php">Exit</a></li>
                </ul>
            </div>
        </form>
    
    </div>


    <script src="./js/write.js"></script>

</body>
</html>