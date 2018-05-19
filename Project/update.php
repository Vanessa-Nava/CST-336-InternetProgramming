<!DOCTYPE html>
<html>
    <head>
    <title>Updating</title>
    </head>
    <body>
        <br><br>
        <h2>Update Information</h2>
        
        <form method = "get">
            Parent's Name<br>
            <div id = "child">
                 <input type="text" name="parent"/><br>
            Parent's Updated Name<br>
                 <input type="text" name="new"/><br>
                 <input type ="submit" name = "update" value = "Update">
            </div>
            <div id = "goBack">
                    <input type = "submit" name = "goBack" value = "Go Back to Administrator Options" class = "btn btn-default">
            </div>

        </form>
        <?php
        include 'connection.php';
            if(isset($_GET['update'])){
                    $parent = $_GET['parent'];
                    $new = $_GET['new'];
                    updateInfo($parent,$new);
                    
                }
                if(isset($_GET['goBack'])){
                    
                    header('Location: administrator.php');
                    
                }
            
            
        ?>
  
    </body>
</html>