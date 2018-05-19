
<?php
    function displayImage(){
     $randomValue = rand(0,7);
     
      switch($randomValue){
                case 0: $symbol = "batman";
                        break;
                case 1: $symbol = "captain_america";
                        break;
                case 2: $symbol = "hulk";
                        break;
                case 3: $symbol = "iron_man";
                        break;
                case 4: $symbol = "spiderman";
                        break;
                case 5: $symbol = "superman";
                        break;
                case 6: $symbol = "wonder_woman";
                        break;
                
            }
            
        echo "<img src = 'img/superheroes/$symbol.png' alt = '$symbol'>";
                
    }
?>


