<?php
    session_start();
    if(isset($_GET["clear"]) && !empty($_GET["clear"])){
        $_SESSION["evenWins"] = 0;
        $_SESSION["oddWins"] = 0;
    }
    if(empty($_GET["rows"]) && empty($_GET["cols"])){
        $_GET['rows'] = 3; 
        $_GET['cols'] = 3;
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Midterm Practice Exam</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
    
    
<form>
    Rows:
    <input type = "text" name = "rows"/>
    Columns:
    <input type = "text" name = "cols"/></br></br>

    <input name = "display" type ="submit" value = "Display!"/>
    
    <input type = "checkbox" name = "8ball" value = "on"> Include 8-ball 
   
   
</form>
    <table id = "table">
    <?php
        include 'inc/functions.php';
        if($_GET['rows'] > 4 || $_GET['cols'] > 4){
            echo "<h2>Dimensions cannot exceed 4</h2>";
        }
        else{
            displayBalls($_GET['rows'], $_GET['cols']);
        }
        echo"</table>";
        
        echo "Results of this round";
        echo "<br>";
        echo "Even balls: ";
        echo $_SESSION["even"];
        echo " points. Odd balls: ";
        echo $_SESSION["odd"];
        echo " points.";
        
        
        echo "<br>Win History <br>";
        echo "Even balls ";
        echo $_SESSION["evenWins"];
        echo " wins, ";
        echo "Odd balls ";
        echo $_SESSION["oddWins"];
        echo " wins."
    
    ?>
    
    
    <form>
        <input name = "clear" type ="submit" value = "Clear History"/>
    </form>
    
   
</body>
</html>