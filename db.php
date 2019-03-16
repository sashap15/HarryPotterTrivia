<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $database = "HPT";

    $conn = new mysqli($server,$user,$pass,$database);

    $sql = "SELECT * FROM Questions";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
    }
    else{
        echo "ooops";
        die();
    }
 ?>
