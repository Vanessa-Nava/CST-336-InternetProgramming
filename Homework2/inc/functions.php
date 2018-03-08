<?php
    function play(){
    
    for($i= 1; $i<3; $i++){
            ${"randomhHand". $i } = rand(0,3);
           displayHand(${"randomhHand".$i}, $i);
        }
    winner($randomhHand1, $randomHand2);
     
    }
    function displayHand($index, $pos){
       $hand = array("rock", "paper", "scissors");
       $randomhHand = $hand[$index];
       echo "<img id = 'reel$pos' src = '/img/$randomhHand.png' alt = 'randomhHand'/>";
    }
    
    function winner($randomValue1,$randomValue2){
        
        echo "<div id = 'output'>";
        if($randomValue1 == $randomValue2){
            echo "<h1> TIE! </h>";
        }
        else if($randomValue1 > $randomValue2){
            echo "<h1> Human <h1>";
        }
        else{
            echo "<h1> Computer </h1>";
        }
    }

?>