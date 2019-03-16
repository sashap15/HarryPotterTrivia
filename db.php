<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $database = "HPT";

    $conn = new mysqli($server,$user,$pass,$database);

    $sql = "SELECT * FROM Questions";

    $result = $conn->query($sql);

    $answers = [];

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();

        $answers[0] = $row['answer_correct'];
        $answers[1] = $row['answer_wrong1'];
        $answers[2] = $row['answer_wrong2'];
        $answers[3] = $row['answer_wrong3'];

        shuffle($answers);


    }
    else{
        echo "ooops";
        die();
    }
 ?>
