<?php

include 'connect.php';

 $con = connectToDB();

// echo "here";

    if(isset($_POST['username'])){
        $records = checkDB($_POST['username']);
        print_r($records);
    }
    function checkDB($username){
        $con = connectToDB();
        
        $sql = "SELECT * FROM `users` WHERE email='$username'";
        
        $statement = $con->prepare($sql);
        $statement ->execute();
    
        
        $result = $statement ->fetchAll();
        
        

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EasyQuiz</title>
         <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h2>Short Intelligent Quiz</h2>
        <form method = "post">
            <!--id = jQuery name = other-->
            Enter: 
            <input id = "user" type = "text" name = "username" placeholder = "Username"/><br /><br/>
            Question 1: 2 + 2 = 
            <input id = "q1" type = "text" name = "answer1"/><br /><br/>
            Question 2: 2 + 3 =
            <input id = "q2" type = "text" name = "answer2"><br/><br/>
            
            <input type="submit" name="submit" value ="Submit"/>
            
        </form>
    </body>
</html>