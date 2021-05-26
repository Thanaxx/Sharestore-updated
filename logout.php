<?php
    session_start();
    unset($_SESSION['submit']);
    echo header("Location:index.php");

?>