<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harry Potter Trivia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="main.js"></script>
</head>
<body>
    <header><h1>Harry Potter Trivia</h1><header>
    <div id = gameArea>
        <h2>Question</h2>
        <p id="Question">What house was Pavarti in?</p>
        <form action="index.php" method="get">
            <input class="answer" type="radio" name="answers" value="Answer1">Answer1<br>
            <input class="answer" type="radio" name="answers" value="Answer2">Answer2<br>
            <input class="answer" type="radio" name="answers" value="Answer3">Answer3<br>
            <input class="answer" type="radio" name="answers" value="Answer4">Answer4
        
        </form>   
        <button id="Submit">Submit</button>
    </div>
</body>
</html>
