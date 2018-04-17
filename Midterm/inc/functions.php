<?php
    $_SESSION["found"] = array();
    $letterarr =array();
    $letterarr = range("A", "Z");
    $index = 0;
    shuffle($letterarr);
    function displayTable($look, $table, $omit){
        echo "<h1>Find the Letter $look </h1>";
        for($i = 0; $i < $table; $i++){
            echo $letterarr[$index];
            echo "<tr>";
            if($index == 26){
                shuffle($letterarr);
                $index = 0;
            }
            
            for($j = 0; $j < $table; $j++){
                echo "<td>";
                echo $letterarr[$index];
                $index++;
                echo "</td>";
            }
            echo "<br>";
            
            
        }
       echo "</tr>";
        
        
    }


?>