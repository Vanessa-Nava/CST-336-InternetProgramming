<?php
    include 'functions.php';
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iCare</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        
        <h1>iCare</h1>
        <p>Search child by: </p>
        <form method = "post">
            <b>Child's Name</b><br>
            
            <input type="text" id = "name" name="name"/></br></br>
            <b>Parent's Name</b><br>
            <input type="text" id = "parent" name="name"/></br></br>
            <!--<p>Child who: </p>-->
            <!--<select name = "child_category">-->
            <!--    <option value = "">Select One</option>-->
            <!--    <option value = "breakfast">Ate Breakfast</option>-->
            <!--    <option value = "present">Present</option>-->
    
            <!--</select><br><br>-->
            
            
        
            <div id = "admin">
                
            </div>
        
            <input id="name_btn" type = "submit" name = "admin" value = "Administrator Log-in" class = "btn btn-default">
        </form>
        <input id="name_btn" type = "submit" name = "anyone" value = "Submit" class = "btn btn-default"><br>
        
        <!--<input id="name" type = "submit" name = "anyone" value = "Submit" class = "btn btn-default"><br>-->
        <?php
            
            if(isset($_POST['admin']))
            {
                header('Location: logIn.php');
            }
            if(isset($_POST['anyone']))
            {
                $searchName = $_GET['name'];
                $searchCategory =$_GET['child_category']; 
                // $items = getMatchingItems($searchName, $searchCategory);
            }
            // displayResults($items);
            
            
            
            
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    </body>
</html>