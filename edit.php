<?php

    include_once("./Connection/connection.php");
    $con = connect();

    // opening specific id
    $ID = $_GET['id'];

    $sql = "SELECT * FROM `text` WHERE id = '$ID'";
    $write = $con->query($sql) or die ($con->error);
    $all = $write->fetch_assoc(); 

    if(isset($_POST['submit'])){
        // echo "Submitted";

        // echo $_POST['username'];
         $newTitle = $_POST['Title'];
         $newBody = $_POST['Body'];


        $sql = "UPDATE `text` SET title = '$newTitle', body = '$newBody' WHERE id = '$ID' ";

        $con->query($sql) or die($con->error);

        // echo header("Location: index.php"); #PREVENTS TO SAVE DUPLICATED DATA -changed
        echo header("Location: openwork.php?id=".$ID); 
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
            <input type="text" name="Title" id="Title" value="<?php echo $all['title']; ?>">
            <textarea name="Body" id="Body" cols="100" rows="30" placeholder="Start writing..."><?php echo $all['body']; ?></textarea><br>

            <div class="modalWrite">
                <ul>
                    <li><button type="submit" name="submit">Update work</button></li>
                    <li><a href="#">Save as draft</a></li>
                    <li><a href="#">Preview</a></li>
                    <li><a href="mainpage.php">Exit</a></li>
                </ul>
            </div>
        </form>
    
    </div>


    <script src="./js/write.js"></script>
</body>
</html>