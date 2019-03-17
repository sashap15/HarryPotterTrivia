<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harry Potter Trivia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="scripts/scripts.js"></script>
</head>
<body>
    <header><h1>Harry Potter Trivia</h1><header>
    <div id = gameArea>
        <h2>Question</h2>
        <p id="Question"><?php echo $row['question'] ?></p>
        <form action="index.php" method="get">
            <div class="options incorrect"><input class="answer" type="radio" name="answers" value="Answer1"><?php echo $answers[0]; ?><br></div>
            <div class="options incorrect"><input class="answer" type="radio" name="answers" value="Answer2"><?php echo $answers[1]; ?><br></div>
            <div class="options" id="correct"><input class="answer" type="radio" name="answers" value="Answer3"><?php echo $answers[2]; ?><br></div>
            <div class="options incorrect"><input class="answer" type="radio" name="answers" value="Answer4"><?php echo $answers[3]; ?></div>

        </form>
        <button id="Submit" onclick="submit()">Submit</button>
    </div>
    <footer>
        <h4 style="display:inline;">Select your house:</h4>
        <button class="Houses" id="Gryffindor" onclick="gryffindor()">Gryffindor</button>
        <button class="Houses" id="Ravenclaw" onclick="ravenclaw()">Ravenclaw</button>
        <button class="Houses" id="Slytherin" onclick="slytherin()">Slytherin</button>
        <button class="Houses" id="Hufflepuff" onclick="hufflepuff()">Hufflepuff</button>
    </footer>
</body>
</html>
