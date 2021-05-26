<?php
    function connect(){
        $host = "localhost";
        $username = "root";
        $password = "Developer1207";
        $database = "Sharestore";

        $conn = new mysqli($host, $username, $password, $database);

        if($conn -> connect_error){
            echo $con -> connect_error;
        }else{
            return $conn;
            // echo "connected";
        }
    }
?>