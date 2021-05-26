<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include_once("./Connection/connection.php");
    $con = connect();


    //User login
    if(isset($_POST['submit'])){
        $email = $_POST['mail'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE email='$email' AND passwords='$password'";
        $account = $con-> query($sql) or die($con->error);
        $row = $account->fetch_assoc();
        $users = $account->num_rows;

        if($users > 0){
            echo header("Location: mainpage.php");
        }else{
            echo '<script>alert("No user found!")</script>';        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./SCSS//homeA.css">
    <link rel="stylesheet" href="./cssFontawesome/all.min.css">
    <title>Sharestore</title>   
</head>
<body>

    <div class="home">

        <div class="cover">
            <img src="./images/Frontimg.svg" alt="cover Image" width="350px" height="auto">
            <h1>SHARESTORE</h1>
            <p>CONNECT YOUR THOUGHTS</p>

            <button class="Start"><a href="#">Get started</a></button>

            <!-- <div class="icons">
                <a href="https://www.facebook.com/christeljoy.abordaje.3/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/thanna_dev/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/Thannaxx"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/christeljoy-abordaje-782b63204/"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
            </div> -->
        
        </div>

    </div>

    <!-- LOGIN MODAL -->
    <div class="loginPage">
        <form action="" method="post">
            <div class="frmlogo">
                <img src="./images/LG.svg" alt="sharesrtore logo" width="100px" height="auto">
                <p>Welcome to Sharestore</p>
            </div>

            <div class="inputEmail">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="mail" placeholder="Email">
            </div>

            <div class="inputPassword">
                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="pass" placeholder="Password">
            </div>
            
            <div class="submitBtn">
                <button type="submit" name="submit">Login</button>
                <p>Forgot your password? <a href="#">Click here.</a></p>
            </div>
        </form>
    </div>

    <script src="./js/log.js"></script>

</body>
</html>