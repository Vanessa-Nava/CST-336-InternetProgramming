<!DOCTYPE html>
<html>
    <head>
        <title>Administrator</title>
    </head>
    <body>
        <h1>Administrator Page</h1>
        What would you like to do?<br>
        <form>
            <!--<button type="submit" name = "add">Add Information</button><br>-->
            <!--<button type="submit" name= "delete"></button><br>-->
            <!--<button type="submit" name="update">Update Information</button><br>-->
            
            <input type="submit" name = "add" value = "Add Information"><br>
            <input type="submit" name = "delete" value = "Delete Information"><br>
            <input type = "submit" name = "update" value = "Update Information"><br><br>
            <input type = "submit" name = "logout" value = "Log Out "><br>
        </form>
        
                    
            <?php
                if(isset($_GET['add'])){
                    header('Location: add.php');
                }
                if(isset($_GET['delete'])){
                    header('Location: delete.php');
                }
                if(isset($_GET['update'])){
                    header('Location: update.php');
                }
                if(isset($_GET['logout'])){
                    header('Location: index.php');
                }
                if(isset($_GET['home'])){
                    header('Location: index.php');
                }
            ?>
    </body>
</html>