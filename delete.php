<?php

    include_once("./Connection/connection.php");
    $con = connect();

    if(isset($_POST['delete'])){

        $id = $_POST['ID'];
        $sql = "DELETE FROM `text` WHERE id = '$id'";
        $con->query($sql) or die($con->error);
        echo header("Location: works.php");
    }

?>