function submit(){
    console.log("click");
    if(document.getElementById('Submit').innerHTML=="Submit"){
        document.getElementById('Submit').innerHTML="Next →";
    }
    else{
        document.getElementById('Submit').innerHTML="Submit";
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