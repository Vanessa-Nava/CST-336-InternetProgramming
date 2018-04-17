//VARIABLES
var selectWord = "";
var selectHint = "";
var board = [];
var remainingGuesses = 6;
var words = ["snake", "monkey", "beetle"];
 
 
//LISTENERS
window.onload = startGame();
        
// console.log(words[0]);

//FUNCTIONS
function startGame(){
    pickWord();
    initBoard();
    updateBoard();
}
function initBoard(){
    for(var letter in selectWord){
        board.push("_");
    }
}
function pickWord(){
    var randomInt = Math.floor(Math.random()* words.length);
    selectWord = words[randomInt];
}
function updateBoard(){
    for(var letter of board){
        document.getElementById("word").innerHTML += letter + " ";   
    }
}

