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

        echo "Question: " . $row['question'];
        echo "<br>Correct Answer: " . $row['answer_correct'];
        echo "<br>Wrong Answer: " . $row['answer_wrong1'];
        echo "<br>Wrong Answer: " . $row['answer_wrong2'];
        echo "<br>Wrong Answer: " . $row['answer_wrong3'];

    }else{
        echo "boo";
    }

 ?>
