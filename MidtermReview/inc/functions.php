<?php
    $_SESSION["even"] = 0;
    $_SESSION["odd"] = 0;
    $_SESSION["evenWins"];
    $_SESSION["oddWins"];
    

    function displayBalls($row, $col){
        $number = array();
        if(isset($_GET["8ball"])){
            $number = range(0, 15);
        }
        else{
            
            $number = array(0,1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13,14,15);
        }
        
        shuffle($number);
        $index = 0;
        
        for($i = 0; $i < $row; $i++){
            echo "<tr>";
            for($j = 0; $j < $col; $j++){
                echo "<td ";
                
                 if($number[$index] % 2 == 0){
                    echo "id = 'even'";
                    $_SESSION["even"] += $number[$index];
                }
                else{
                    echo "id = 'odd'";
                    $_SESSION["odd"] += $number[$index];
                }
                echo ">";
                echo "<img ";
                echo "src = 'img/$number[$index].png'>";
                $index++;
                echo "</td>";
            }
            echo "</tr>";
        }
        if($_SESSION["even"] > $_SESSION["odd"]){
            $_SESSION["evenWins"]++;
        }
        else if($_SESSION["even"] < $_SESSION["odd"]){
                $_SESSION["oddWins"]++;
        }
            
        
    }


?>