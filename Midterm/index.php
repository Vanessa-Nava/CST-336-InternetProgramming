<?php
    session_start();
 
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Midterm</title>
        <style>
        @import url("css/styles.css");
        </style>
    </head>
    <body>
        <h1>Find the Letter!</h1>
        <?php
        
        echo "<form method = 'get'>";
        //Letter to find
        
            echo "Select a Letter to Find: <br>";
            $arrAlpha = range("A", "Z");
            echo "<select name = 'charChoice'>";
            for($i = 0; $i < 26; $i++){
                echo "<option value = '$arrAlpha[$i]' > $arrAlpha[$i] </option>";
            }
            echo "</select>";
            echo "<br><br>";
            $find = $_GET['charChoice'];
            
            
        //Table size 
            echo "Select a table size: ";
            echo "<select name = 'tableSize'>";
            for($x = 6; $x <= 10; $x++){
                echo "<option value = '$x'>";
                echo $x;
                echo "X";
                echo $x;
                echo "</option>";
            }
            echo "</select>";
            echo "<br><br>";
            $size = $_GET['tableSize'];
            
        //Letter to omit
            echo "Select Letter to Omit: ";
            echo "<select name = 'omit'>";
            for($i = 0; $i < 26; $i++){
                echo "<option value = '$arrAlpha[$i]'> $arrAlpha[$i] </option>";
            }
            echo "</select>";
            $exclude = $_GET['omit'];
            
            echo "<input name = 'createTable' type = 'submit' value = 'Create Table'>";
            echo "</form>";
        ?>

         <table>
             <?php
            include 'inc/functions.php';
            if($find == $exclude){
                echo "Error: Letter to Find MUST Be different from Letter to Omit";
            }
            else{
                displayTable($find, $size, $exclude);
            }
        
        ?>
         </table>
        
      
        
        
  
        
    
        
    </body>
    
</html>