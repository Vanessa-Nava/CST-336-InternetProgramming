<!DOCTYPE html>
<html>
    <head>
    <title>Adding</title>
    </head>
    <body>
        <br><br>
        <h2>Input Information</h2>
        
        <form method = "get">
            Child's Name<br>
            <div id = "child">
                 <input type="text" name="child"/><br>
            </div>
            Parent's Name<br>
            <div id = "parent">
                <input type="text" name="parent"/><br>
            </div>
            
            Choose a group<br>
            <div id = "attendance">
                <input type="radio" name="attendance" value = 1/>present<br>
                <input type="radio" name="attendance" value = 3/>absent<br>
            </div>
            <div id = "ate">
                <input type="radio" name="ate" value = 2/>Has ate breakfast<br>
                <input type="radio" name="ate" value = 4/>Has <b>not</b> ate breakfast<br>
            </div>
            
            <div id = "insert">
                <input type = "submit" name = "insert" value = "Add" class = "btn btn-default"><br>

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
                    $ate = $_GET['ate'];
                    $attendance = $_GET['attendance'];
                    
                    insertInfo($child, $parent, $ate, $attendance);
                    
                }
                if(isset($_GET['goBack'])){
                    
                    header('Location: administrator.php');
                    
                }
        ?>
  
    </body>
</html>