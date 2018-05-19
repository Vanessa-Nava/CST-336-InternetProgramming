<?php
        
    include 'functions.php';
    include 'connection.php';
    
    //$con = connectToDB();
    
    if(isset($_POST['superheroName'])){
   
    //checking if anything is saved in the name
    //echo $_POST['superheroName'] . "<br/>";

    checkingSuperHero($_POST['superheroName']);
    
    }
    else{
        //echo "<div id = 'notSelected'>";
        echo "Please select a name";
        //echo "</div>";
    }
    
    function checkingSuperHero($superHeroName){
        
    $arr = explode(" ", $superHeroName);
    $first = $arr[0];
    $last = $arr[1];
    
    
    // echo "In ";
    $con = connectToDB();
    $sql = "SELECT * FROM `superhero` WHERE firstname = '$first'";
    
    $statement = $con->prepare($sql);
    $statement ->execute();
    $records = $statement ->fetchAll();
    
    //echo "Num records: ".$statement -> rowCount()."<br/>";
    
    if($statement->rowCount() > 0){
        //$sql = "UPDATE fp_login SET lastLogin = NOW(), lastLoginStatus = 'S' WHERE fp_login.username =  '$username'";
        echo "In here";
        
    }
    else{
       //$sql = "UPDATE fp_login SET lastLogin = NOW(), lastLoginStatus = 'U' WHERE fp_login.username =  '$username'";
    }
    
    //echo $sql;
    
    $statement = $con->prepare($sql);
    $statement ->execute();
    
    
    }
    
  ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Superhero</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h3>What is the name of the following superhero?</h3></br>
         
         <?php
            
            displayImage();
            
        ?>
        
        </br>
    
        <form method = "post">
            <select name = "superheroName" id = "superName">
                      <option value = "">Select One</option>
                      <option value="Bruce Banner">Bruce Banner</option>
                      <option value="Bruce Wayne">Bruce Wayne</option>
                      <option value="Clark Kent">Clark Kent</option>
                      <option value="Diana Prince">Diana Prince</option>
                      <option value = "Peter Parker">Peter Parker</option>
                      <option value = "Steve Rogers">Steve Rogers</option>
                      <option value = "Tony Stark">Tony Stark</option>
            </select> </br></br>
            
            <input type="submit" name="submit" value ="Check Answer"/>
            
        </form>
        
    
    </body>
</html>