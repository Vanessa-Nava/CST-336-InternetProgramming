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
        
        <b>Child's Name</b><br>
        <input type="text" id = "name" name="name"/></br></br>
        or
        <b>Parent's Name</b><br>
        <input type="text" id = "parent" name="name"/></br></br>
        or
        <b>Child I.D.</b><br>
        <input type="text" id = "id" name="name"/></br></br>
        <div id = "admin"></div>
        <input id="name_btn" type = "submit" name = "anyone" value = "Search" class = "btn btn-default"><br>
        
        <form action="logIn.php">
            <input id="admin_btn" type = "submit" name = "admin" value = "Administrator Log-in" class = "btn btn-default">
        </form>
        
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    </body>
</html>