<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include_once("./Connection/connection.php");
    $con = connect();

    // opening specific id
    $ID = $_GET['id'];

    $sql = "SELECT * FROM `text` WHERE id = '$ID' ";
    $write = $con->query($sql) or die ($con->error);
    $all = $write->fetch_assoc(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./SCSS///read.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./cssFontawesome/all.min.css">
    <title>Document</title>
</head>
<body>
    <nav>

        <form action="delete.php" method="post">
            <a href="works.php"><i class="fa fa-times"></i></a> 
            <a href="edit.php?id=<?php echo $all['id']?>"><i class="far fa-edit"></i></a>
            <button type="submit" name="delete"><a href="#"><i class="fa fa-trash"></i></a></button>
            <input type="hidden" name="ID" value="<?php echo $all['id']?>">
        </form>
        
    </nav>


    <div class="story">
        <div class="titleCreated">
            <?php echo $all['title'] ?>
        </div>

        <div class="bodyCreated">
            <?php echo $all['body'] ?>
        </div>
    </div>

</body>
</html>