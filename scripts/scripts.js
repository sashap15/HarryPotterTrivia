// Hello SASHY!  I have your next task for you!  Please update this function to change the border
// color of the answers when you click submit.  Of course when you click next the borders should
// all change back to black.  modify the function below!  I am proud of you! <3

function submit(){
    console.log("click");
    if(document.getElementById('Submit').innerHTML=="Submit"){
        //Make the 3 incorrect answers red border, and the correct one green.  Just assume that the
        // correct one is the 3rd one for now.

        // ----
        


        // ----
        document.getElementById('Submit').innerHTML="Next →";
        document.getElementById('correct').style.borderColor="green";
        document.getElementById('correct').style.backgroundColor="#d0f4d3";
        var incorrects = document.getElementsByClassName('incorrect');
        var i = 0;
        for (i = 0; i < incorrects.length; i++) {
            incorrects[i].style.borderColor = "red";
            incorrects[i].style.backgroundColor = "#dd9090";
        }
    }
    else{

        //Make all of the borders black!
        // Hint: use document.getElementByClassName();  -> this returns an array (gotta run a loop!)

        // ----


        // ----
        document.getElementById('Submit').innerHTML="Submit";
        var answers = document.getElementsByClassName('options');
        var cooler = document.getElementsById('gameArea').style.backgroundColor;
        for(var i=0; i<answers.length; i++){
            answers[i].style.borderColor = "black";
            answers[i].style.backgroundColor = cooler;
        }

    }

}

function gryffindor(){
    console.log("click");
    document.getElementById('gameArea').style.backgroundColor="#FFC500";
    document.body.style.backgroundColor="#7F0909";
    document.getElementById('Submit').style.backgroundColor="#7F0909";
    document.getElementById('Submit').style.color="#FFC500";

}
function ravenclaw(){
    console.log("click");
    document.getElementById('gameArea').style.backgroundColor="#946B2D";
    document.body.style.backgroundColor="#1259cc";
    document.getElementById('Submit').style.backgroundColor="#1259cc";
    document.getElementById('Submit').style.color="black";
}
function slytherin(){
    console.log("click");
    document.getElementById('gameArea').style.backgroundColor="#AAAAAA";
    document.body.style.backgroundColor="#0D6217";
    document.getElementById('Submit').style.backgroundColor="#0D6217";
    document.getElementById('Submit').style.color="#AAAAAA";
}
function hufflepuff(){
    console.log("click");
    document.getElementById('gameArea').style.backgroundColor="#EEE117";
    document.body.style.backgroundColor="#946B2D";
    document.getElementById('Submit').style.backgroundColor="#946B2D";
    document.getElementById('Submit').style.color="#EEE117";
}
