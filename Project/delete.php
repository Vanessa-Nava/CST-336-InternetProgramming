<!DOCTYPE html>
<html>
    <head>
    <title>Delete</title>
    </head>
    <body>
        <br><br>
        <h1>Deleting Information</h1>
        
        <form method = "get">
            Child's Name<br>
            <div id = "child">
                 <input type="text" name="child"/><br>
            </div>
            Parent's Name<br>
            <div id = "parent">
                <input type="text" name="parent"/><br>
            </div>
            <div id = "insert">
                <input type = "submit" name = "insert" value = "Delete" class = "btn btn-default"><br>

            </div>
            <div id = "goBack">
                    <input type = "submit" name = "goBack" value = "Go Back to Administrator Options" class = "btn btn-default">
            </div>
        </form>
        
        
        
        <?php
        include 'connection.php';
            if(isset($_GET['insert'])){
                    $child = $_GET['child'];
                    $parent = $_GET['parent'];
                    
                    deleteInfo($child, $parent);
                    
                }
                if(isset($_GET['goBack'])){
                    
                    header('Location: administrator.php');
                    
                }
        ?>
        
    
    </body>
</html>